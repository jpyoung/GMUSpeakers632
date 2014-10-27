<?php

class Talks extends CI_Model {
	


	function get_all_talks() {
		$query = $this->db->get('Talks');
				if ($query->num_rows) {
			return $query->result();
		}
		return false;
	}

	function find_user_picture($uid) {
		$this->db->where('u_id', $uid);
		$query = $this->db->get('user');
		if ( $query->num_rows ) {
			return $query->row();
		}
		return false;
	}

	function all_lecture_listing() {
		$over = array();
		$totalR = array();
		$totalR['talks'] = $this->get_all_talks();
		// $totalR['name'] = "Jack";
		for ($x = 0; $x < count($totalR['talks']); $x++) {
			$over[$x] = array('talks' => $totalR['talks'][$x], 'userinfo' => $this->find_user_picture($totalR['talks'][$x]->u_id));
		}
		return $over;

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