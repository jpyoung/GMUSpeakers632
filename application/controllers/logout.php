<?php

class Logout extends CI_Controller() {
	
	function index() {
		if ($this->session->userdata('previous_username') != "") {           
			$userid = urlencode($this->session->userdata('previous_username'));           
			redirect('login/login_check/-1/logout');
		} else {
			$this->session->sess_destroy();
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('user_id');
			redirect(base_url('login'));
		}
    }
}

?>