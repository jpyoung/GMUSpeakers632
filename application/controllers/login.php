<?php

///////////////////////////////////////////////////////////////////
// Created by Jack Young 
// Date: 08/09/2013
// Copyright 2013.  All rights reserved.  
///////////////////////////////////////////////////////////////////

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}


	function index($warn=NULL, $message=NULL) {
		$this->login_view($warn, $message);
	}


	function login_view($warn=NULL, $message=NULL) {
		$data['warn'] = $warn;
		$data['message'] = $message;
		// $this->load->view('home', $data);
		$this->goto_speakerListing();
	}

	function goto_speakerListing() {
		$this->load->model("talks");
		$talks = $this->talks->all_lecture_listing();
		$data["filter"] = $this->filter_by();

		$t = $data['filter']['fid'];

		if ($t == 1) {
			$data["talks"] = $talks;
		} else {
			$tmp = array();
			$counter = 0;
			foreach ($talks as $rows) {
				 $x = $rows['userinfo']->category;
				if ($t == 4) {
					// science
					if ($x == 2) {
						$tmp[$counter++] = $rows;
					}
				}
				if ($t == 2) {
					// tech talks
					if ($x == 1) {
						$tmp[$counter++] = $rows;
					}
				}
				if ($t == 3) {
					// business
					if ($x == 3) {
						$tmp[$counter++] = $rows;
					}
				}
				if ($t == 5) {
					// others
					if ($x == 4) {
						$tmp[$counter++] = $rows;
					}
				}
				
			}
			$data["talks"] = $tmp;
		}
		$this->load->model("dashboard_prefs");
		$data["prefs"] = $this->dashboard_prefs->get_dashboard_prefs();
		
		$this->load->view('home', $data);
	}
	function filter_by() {
		$fid = 1;
		if (isset($_GET['fid'])) {
			$fid = $_GET['fid'];
		}
		$a = array();
		$a[1] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=2" class="tag tag--header tag--javascript filterTagPill">Tech Talk</a>';
		$a[2] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=3" class="tag tag--header tag--html-css filterTagPill">Business</a>';
		$a[3] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=4" class="tag tag--header tag--ios filterTagPill">Science</a>';
		$a[4] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=5" class="tag tag--header tag--ruby filterTagPill">Other</a>';
		$a[0] = '<a href="' . base_url() . 'index.php/home/filter_update?fid=1" class="tag tag--header tag--ios filterTagPill" style="background-color: #278998;">All</a>';
		$r = array();
		$r['cf'] = $a[$fid - 1];
		unset($a[$fid - 1]);
		$r['remaining'] = $a;
		$r['fid'] = $fid;
		return $r;
	}


	function login_verification() {
		$username = $_POST['l_username'];
		$password = $_POST['l_password'];

		if ( $username == '' || $password == '' ) {
			//username or password should not be blank.
			$data = '';
			$warn = 'Please make sure both the username and password fields are filled in.';
			$this->index($warn, $data);
		} else {
			$this->load->model('login_model');
			$user = $this->login_model->authenticate_user($username, $password);
			if ( $user ) {
				//found a matching user
				$us_data = array (
						'user_type' => $user->user_type,
						'user_id' => $user->u_id,
						'username' => $username,
						'password' => $password,
						'logged_in' => TRUE
					);
				$this->session->set_userdata($us_data);
				redirect('dashboard');
			} else {
				//Could not find any matching username or password
				$data = '';
				$warn = 'Invalid Username or Password';
				$message = $username;
				$this->index($warn, $message);
			}
		}
	}

	/**
	* This function is called when the user pressed the log out on the top nav bar. 
	*
	*/
	function logout() {
		$this->session->sess_destroy();
		$this->index();
	}
	
}

?>