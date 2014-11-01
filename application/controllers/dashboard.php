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

		$uid = $this->session->userdata('user_id');
		$this->load->model("talks");
		$data["profile"] = $this->talks->get_detailed_speaker_info($uid);
		$data["talks"] = $this->talks->get_talks_by_speaker($uid);
		$this->load->view('backend/speakerUpdateStuff', $data);
	}


	function add_a_talk() {
		$uid = $this->session->userdata('user_id');
		$this->load->model("talks");
		$data["profile"] = $this->talks->get_detailed_speaker_info($uid);
		$profName = $data["profile"]['name'];
		$topic = $_POST["sp_topic"];
		$desc = $_POST["sp_description"];
		$dd = array("title" => $topic, "description" => $desc, "prof_name" => $profName, "u_id" => $uid);
		$this->talks->insert_new_talk_by_speaker($dd);
		$this->speaker_page();
	}


	function speaker_delete_talk() {
		$dtid = $_GET['sdtid'];
		$this->load->model("speakers");
		$this->speakers->delete_talk($dtid);
		$this->speaker_page();
	}
	//Build a solid foundation in Git
	


}

?>

