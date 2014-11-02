<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

///////////////////////////////////////////////////////////////////
// Created by Jack Young 
// Date: 08/12/2013 
///////////////////////////////////////////////////////////////////

class Admin extends CI_Controller {


	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}


	public function index() {
		$this->auth->check_session();
		
		$this->goto_edit_home_page();
	}

	function goto_edit_home_page() {
		$data['nav_selection'] = 1;
		$this->load->model("dashboard_prefs");
		$data["prefs"] = $this->dashboard_prefs->get_dashboard_prefs();

		$this->load->view('backend/adminEditIndex', $data);
	}

	function goto_add_speaker_page() {
		$nid = 2;
		if (isset($_GET['nid'])) {
			$nid = $_GET['nid'];
		}
		$data['nav_selection'] = $nid;

		$this->load->view('backend/adminAddUser', $data);
	}

	function goto_delete_speakers_page() {
		$nid = 3;
		if (isset($_GET['nid'])) {
			$nid = $_GET['nid'];
		}
		$data['nav_selection'] = $nid;

		$this->load->model("speakers");
		$data["speakers"] = $this->speakers->get_speakers();

		$this->load->view('backend/adminDeleteSpeaker', $data);
	}

	function goto_delete_lectures_page() {
		$nid = 4;
		if (isset($_GET['nid'])) {
			$nid = $_GET['nid'];
		}		
		$data['nav_selection'] = $nid;

		$this->load->model("talks");
		$data["talks"] = $this->talks->all_lecture_listing();

		$this->load->view('backend/adminTalksEdits', $data);
	}




	//Edit Home Page
	function ehp_form_action() {
		$content = $_POST['center_content'];
		$action = $_POST['commit_ehp'];
		$this->load->model("dashboard_prefs");

		if ($action == "Update") {
			$response = $this->dashboard_prefs->update_dashboard_prefs($content);
			if ($response) {
				$this->goto_edit_home_page();
			}
		}
		if ($action == "Reset to Default") {
			//resetting the youtube video and the center content to the original
			//stuff.
			$response = $this->dashboard_prefs->reset_to_default();
			if ($response) {
				$this->goto_edit_home_page();
			}
		}

	}

	// Delete Speaker Page
	function delete_speaker() {
		$uid = $_GET['dduid'];
		$this->load->model("speakers");
		$this->speakers->delete_speaker($uid);
		$this->goto_delete_speakers_page();
	}


	function delete_talk() {
		// function delete a individual talk on the delete talks page admin section
		$dtid = $_GET['dtid'];
		$this->load->model("speakers");
		$this->speakers->delete_talk($dtid);
		$this->goto_delete_lectures_page();
	}


	// Add new Speaker Page
	function add_new_user() {
		//echo "Adding new Users";
		$fullName = $_POST["newUserFullName"];
		$imgURL = $_POST["newUserURL"];
		$cat = $_POST["categ"];
		$catID = 1;
		if ($cat == "Business") {
			$catID = 3;
		}
		if ($cat == "Science") {
			$catID = 2;
		}
		if ($cat == "Other") {
			$catID = 4;
		}
		$dd = array("user_type" => 2, "name" => $fullName, "username" => $fullName, "password" => "speaker_" . str_replace(' ', '', $fullName), "category" => $catID, "image_url" => $imgURL);
		$this->load->model("speakers");
		$this->speakers->add_speaker($dd);
		$this->goto_add_speaker_page();
	}


}

?>

