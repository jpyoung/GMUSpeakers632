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
		$this->load->view('home', $data);
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