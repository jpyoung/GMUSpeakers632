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

		$this->load->view('backend/adminEditIndex');
	}

	function goto_edit_home_page() {

		$this->load->view('backend/adminEditIndex');
	}

	function goto_add_speaker_page() {
		$this->load->view('backend/adminAddUser');
	}

	function goto_delete_speakers_page() {
		$this->load->view('backend/adminDeleteSpeaker');
	}

	function goto_delete_lectures_page() {
		$this->load->view('backend/adminTalksEdits');
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

