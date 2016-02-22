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

	function getUserDetails($user_id){
		$this->db->select('office.office_name office_name, user.id user_id, user.office_id office_id, user.user_type_id user_type_id, user.name name, user.position position');
		$this->db->from('user');
		$this->db->join('office', 'user.office_id = office.id');
		$this->db->where('user.id', $user_id);
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

	function saveEditUser($user_id, $name, $old_password, $new_password){

		$this->db->where('id', $user_id);
	}

	function validatePassword($user_id, $old_password){
		$this->db->select('id');
		$this->db->from('user');
		$this->db->where('id', $user_id);
		$this->db->where('password', $old_password);
		$query = $this->db->get();
		return $query->result();
	}
}