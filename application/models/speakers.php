<?php

class Speakers extends CI_Model {
	

	function get_speakers() {
		// this function returns all the users that are not of admin user type aka (1)
		$this->db->where('user_type !=', 1);
		$query = $this->db->get('user');
		if ( $query->num_rows ) {
			return $query->result();
		}
		return false;
	}

	function get_speaker($uid) {
		// returning the speaker info for the speakerUpdateStuff page. This is only called when the initial gather fails
		$query = $this->db->query('SELECT u.u_id, u.bio, u.user_type, u.name, u.image_url, u.category from user as u where u.u_id = ' . $uid);
		if ($query->num_rows == 0) {
			return 0;
		}
		return $query->row_array();
	}

	function delete_speaker($uid) {
		// this function will delete a speaker by their passed in ID
		$this->db->where('u_id', $uid);
		$this->db->delete('user');
		$this->delete_associated_speaker_talks($uid);
		return true;
	}

	function delete_associated_speaker_talks($uid) {
		// this function will be used and called to delete all the talks
		// associated with an individual user that has been deleted by the admin.
		$this->db->where('u_id', $uid);
		$this->db->delete('Talks');
		return true;
	}

	function delete_talk($tid) {
		// this function is used to delete the speaker talk
		$this->db->where('tid', $tid);
		$this->db->delete('Talks');
		return true;
	}



	function add_speaker($data) {
		// admin can insert a new speaker into the database. 
		$this->db->insert('user', $data);
		return true; 
	}


	
}

?>