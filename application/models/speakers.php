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

	function delete_associated_speaker_talks(uid) {
		// this function will be used and called to delete all the talks
		// associated with an individual user that has been deleted by the admin.
		$this->db->where('u_id', $u_id);
		$this->db->delete('Talks');
		return true;
	}

	function delete_talk($tid) {
		// this function is used to delete the speaker talk
		$this->db->where('tid', $tid);
		$this->db->delete('Talks');
		return true;
	} 

	
	//when a user logs in, this method is called to update the stats_tracker table.
	//the username and timestamp are entered into this table.
	//@param $activity_type  : i.e. login, upload, and etc. 
	// function update_stats_tracker($activity_type) {
	// 	$username = $this->session->userdata('username');
	// 	$ar = array('username' => $username, 'activity_type' => $activity_type);
	// 	$this->db->insert('stats_tracker', $ar);
	// }
	
	// //function is used to get a user's stats tracker activity
	// //by the passed in username from the DB. 
	// function get_stats_tracker_by_userid($userid) {
		
	// 	$fu = $this->find_username($userid);
	// 	$username = $fu->u_username;
		
	// 	$this->db->where('username = ', $username);
 //        $res = $this->db->get('stats_tracker');
	// 	if($res->num_rows){
	// 		return $res->result();
	// 	} 
	// 	return false;
	// }
	
	// //function is used to find the username by the passed in userid. 	
	// function find_username($userid) {
	// 	$this->db->where('u_id', $userid);
	// 	$query = $this->db->get('user');
	// 	if ($query->num_rows) {
	// 		return $query->row();
	// 	}
	// 	return false;
	// }
	
}

?>