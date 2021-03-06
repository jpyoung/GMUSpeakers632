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
		$this->load->model("speakers");
		$tmp = $this->talks->get_detailed_speaker_info($uid);

		if ($tmp) {
			// first query failed to find anything because there are no talks
			$data["profile"] = $tmp;
		} else {
			// backup query to retrieve the basics of the speaker
			$data["profile"] = $this->speakers->get_speaker($uid);
		}

		$data["talks"] = $this->talks->get_talks_by_speaker($uid);
		$this->load->view('backend/speakerUpdateStuff', $data);
	}

	function add_a_talk() {
		$uid = $this->session->userdata('user_id');
		$this->load->model("talks");
		$this->load->model("speakers");
		$tmp = $this->talks->get_detailed_speaker_info($uid);
		if ($tmp) {
			// first query failed to find anything because there are no talks
			$data["profile"] = $tmp;
		} else {
			// backup query to retrieve the basics of the speaker
			$data["profile"] = $this->speakers->get_speaker($uid);
		}
		$profName = $data["profile"]['name'];
		$topic = $_POST["sp_topic"];
		$desc = $_POST["sp_description"];
		if ($topic != '' & $desc != '') {
			// if they press the add talk and the fields are empty, dont insert into db
			$dd = array("title" => $topic, "description" => $desc, "prof_name" => $profName, "u_id" => $uid);
			$this->talks->insert_new_talk_by_speaker($dd);
		}
		$this->speaker_page();
	}

	function speaker_delete_talk() {
		$dtid = $_GET['sdtid'];
		$this->load->model("speakers");
		$this->speakers->delete_talk($dtid);
		$this->speaker_page();
	}

	function speaker_edit_talk() {
		$dtid = $_GET['sedtid'];
		$topicE = $_POST["editTalk_topic"];
		$descE = $_POST["editTalk_desc"];
		// If the entered data are empty fields, then just insert NA so that its not empty.
		if ($topicE == "") {
			$topicE = "NA";
		}
		if ($descE == "") {
			$descE = "NA";
		}
		$d = array("title" => $topicE, "description" => $descE);
		$this->load->model("talks");
		$this->talks->update_existing_talk($d, $dtid);
		$this->speaker_page();
	}


	function update_speaker_bio() {
		$uid = $_GET['upDBuid'];
		$edSpeakerBio = $_POST['editSpeakerBIO'];
		if ($edSpeakerBio == "") {
			$edSpeakerBio = "NA";
		}
		$d = array("bio" => $edSpeakerBio);
		$this->load->model("talks");
		$this->talks->update_speaker_bio($d, $uid);
		$this->speaker_page();
	}

}

?>

