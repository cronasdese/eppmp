<?php

class User_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getOffices(){
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

	function validateUser($office_id, $password){
		$this->db->select('office.office_name office_name, user.id user_id, user.office_id office_id, user.user_type_id user_type_id, user.name name, user.position position');
		$this->db->from('user');
		$this->db->join('office', 'office.id = user.office_id');
		$this->db->where('office_id', $office_id);
		$this->db->where('password', $password);
		$this->db->where('user.status', 1);
		$this->db->limit('1');
		$query = $this->db->get();
		return $query->result();
	}
}