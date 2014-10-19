<?php

///////////////////////////////////////////////////////////////////
// Created by Jack Young 
// Date: 08/30/2013
// Copyright 2013.  All rights reserved.  
///////////////////////////////////////////////////////////////////

class Login_model extends CI_Model {


	/**
	* This function is used to authenticate the username and password
	* entered in by the user on the login page.  If it finds a matching
	* record the row is returned, else it returns false.   
	*
	* @param $username
	* @param $password
	* @return query results (i.e. row or false)
	*/
	function authenticate_user($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user');
		if ( $query->num_rows ) {
			return $query->row();
		}
		return false;
	}
	
	
}

?>