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
		$nid = $_GET['nid'];
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
		$nid = $_GET['nid'];
		$data['nav_selection'] = $nid;

		$this->load->view('backend/adminTalksEdits', $data);
	}




	//Edit Home Page
	function ehp_form_action() {
		$url = $_POST['youtube_url'];
		$content = $_POST['center_content'];
		$action = $_POST['commit_ehp'];
		$this->load->model("dashboard_prefs");

		if ($action == "Update") {
			$response = $this->dashboard_prefs->update_dashboard_prefs($url, $content);
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

	// Add new Speaker Page
	function add_new_user() {
		echo "Adding new Users";
	}

	// /**
	// * This is the main dashboard page function.  It is called when the dashboard
	// * view is loaded/refreshed.    
	// */
	// function admin_page() {
	// 	$this->auth->check_session();

	// 	// $data['title'] = "eFAV Dashboard";
		
	// 	// $data['aircrafts'] = $this->get_all_aircraft();
	// 	// $data['all_manufacturers'] = $this->get_all_manufacturers();

	// 	// //Base Value Current Market Price Table stuff
	// 	// $this->load->model('bv_cmp_model');
	// 	// $data['bv_figures'] = $this->bv_cmp_model->collect_data_controller(6);
		
	// 	// $this->load->model('aircraft_stats_model');
	// 	// $data['ac_statistics'] = $this->aircraft_stats_model->gather_all(6);

	// 	// $this->load->model('adjusted_bv_cmp_model');
	// 	// $data['adjusted_bv_cmp_figures'] = $this->adjusted_bv_cmp_model->get_default_form_data_abccmp(6);

	// 	// $this->load->model('ua_selection_log_model');
	// 	// $data['usersTopFiveAircraft'] = $this->ua_selection_log_model->find_users_top_five_aircrafts(11);
		
	// 	$this->load->view('backend/adminEditIndex');
	// }

	// function speaker_page() {
	// 	$this->auth->check_session();
	// 	$this->load->view('backend/speakerUpdateStuff');
	// }
	


}

?>

