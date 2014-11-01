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
		// retrieves all the talks for the home page, including info from both the Talks and user table. 
		$over = array();
		$totalR = array();
		$totalR['talks'] = $this->get_all_talks();
		// $totalR['name'] = "Jack";
		for ($x = 0; $x < count($totalR['talks']); $x++) {
			$over[$x] = array('talks' => $totalR['talks'][$x], 'userinfo' => $this->find_user_picture($totalR['talks'][$x]->u_id));
		}
		return $over;

	}

	function get_detailed_speaker_info($uid) {
		// This function retrieves the detailed information for the speaker dashboard page, ie their profile page. 
		$query = $this->db->query("SELECT u.u_id, u.bio, u.user_type, u.name, u.image_url, u.category, t.tid, t.description, t.title from user as u, Talks as t where u.u_id = t.u_id and u.u_id = " . $uid);
		if ($query->num_rows == 0) {
			return 0;
		}
		return $query->row_array();
	}

	function get_talks_by_speaker($uid) {
		// This function retrieves the talks for a given speaker, used in speaker profile page.
		$this->db->where('u_id', $uid);
		$query = $this->db->get('Talks');
		if ($query->num_rows) {
			return $query->result();
		}
		return false;
	}

	function insert_new_talk_by_speaker($data) {
		// Inserting a new talk by the speaker from the speakers profile page
		$this->db->insert('Talks', $data);
		return true; 
	}


	function get_detailed_talk_info($tid) {
		// This function retrieves the information for a detailed view a given talk
		$query = $this->db->query("SELECT u.u_id, u.bio, u.user_type, u.name, u.image_url, u.category, t.tid, t.description, t.title from user as u, Talks as t where u.u_id = t.u_id and t.tid = " . $tid);
		if ($query->num_rows == 0) {
			return 0;
		}
		return $query->row_array();
	}

	function post_a_talk_review($tid, $comment) {
		// insert a comment for a given talk
		$data = array('tid' => $tid, 'comment' => $comment);
		$this->db->insert('reviews', $data); 
	}

	function get_talk_reviews($tid) {
		// this function is used to retrieved the comments associated with a given talk based on their TID
		$this->db->where('tid', $tid);
		$query = $this->db->get('reviews');
		if ( $query->num_rows ) {
			return $query->result();
		}
		return false;
	}


//SELECT u.u_id, u.user_type, u.name, u.image_url, u.category, t.tid, t.description, t.title from user as u, Talks as t where u.u_id = t.u_id;

// SELECT u.u_id, u.user_type, u.name, u.image_url, u.category, t.tid, t.description, t.title from user as u, Talks as t where u.u_id = t.u_id and t.tid = 4;

	
}

?>