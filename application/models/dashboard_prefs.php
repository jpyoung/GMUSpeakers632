<?php

class Dashboard_prefs extends CI_Model {
	


	function get_dashboard_prefs() {
		$query = $this->db->get('dashboard');
		if ($query->num_rows) {
			return $query->result();
		}
		return false;
	}

	function update_dashboard_prefs($url, $content) {
		$data = array('video_url' => $url, 'center_content' => $content);
		$this->db->where('id', 1);
	    $this->db->update('dashboard', $data);
	    return true;	
	}

	function reset_to_default() {
		$r = $this->get_dashboard_prefs();
		$tvu = $r[0]->default_url;
		$tc = $r[0]->default_center_content;
		return $this->update_dashboard_prefs($tvu, $tc);
	}
	
}

?>