<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

///////////////////////////////////////////////////////////////////
// Created by Jack Young 
// Date: 08/12/2013 
///////////////////////////////////////////////////////////////////

class Dashboard extends CI_Controller {


	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}


	public function index() {
		if ( $this->session->userdata('user_type') == 1 ) {
			$this->admin_page();
		} else if ($this->session->userdata('user_type') == 2) {
			$this->speaker_page();
		} else {
			redirect('login');
		}
	}


	/**
	* This is the main dashboard page function.  It is called when the dashboard
	* view is loaded/refreshed.    
	*/
	function admin_page() {
		$this->auth->check_session();
		$data['nav_selection'] = 1;
		$this->load->model("dashboard_prefs");
		$data["prefs"] = $this->dashboard_prefs->get_dashboard_prefs();

		$this->load->view('backend/adminEditIndex', $data);
	}

	function speaker_page() {
		$this->auth->check_session();
		$this->load->view('backend/speakerUpdateStuff');
	}
	


}

?>

