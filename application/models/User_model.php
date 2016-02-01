<?php

class User_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getOffice(){
		$this->db->select('id, office_name');
		$this->db->from('office');
		$this->db->order_by("office_name", "asc");
		$query = $this->db->get();
		return $query->result();
	}

	function getUserDetails($user_id, $password){
		$this->db->select('office_id, user_type, user_id, name, position, password, status');
		$this->db->from('user');
		$this->db->where('user');
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->result();
	}

	function validateUser($user_id, $password){
		$this->db->select('office_id, user_type, user_id, name, position, password, status');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$this->db->where('password', $password);
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->result();
	}
}