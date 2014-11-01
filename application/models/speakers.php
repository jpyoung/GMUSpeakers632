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

	
}

?>