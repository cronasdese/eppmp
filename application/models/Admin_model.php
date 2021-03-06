<?php

class Admin_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function addCategory($category){
		$data = array(
			'category' => $category,
			'status' => 1
		);
		$this->db->insert('category', $data);
	}

	function getCategory(){
		$this->db->select('category.*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	function editCategory($category_id, $category, $status){
		$data = array(
			'category' => $category,
			'status' => $status
		);
		$this->db->where('id', $category_id);
		$this->db->update('category', $data);
	}

	function addSubcategory($category_id, $subcategory){
		$data = array(
			'category_id' => $category_id,
			'subcategory' => $subcategory['subcategory'],
			'status' => 1
		);
		$this->db->insert('subcategory', $data);
	}

	function getSubcategory(){
		$this->db->select('subcategory.*, category.category');
		$this->db->from('subcategory');
		$this->db->join('category', 'subcategory.category_id = category.id');
		$query = $this->db->get();
		return $query->result();
	}

	function editSubcategory($subcategory_id, $subcategory, $status){
		$data = array(
			'subcategory' => $subcategory,
			'status' => $status
		);
		$this->db->where('id', $subcategory_id);
		$this->db->update('subcategory', $data);
	}

	function addItem($subcategory_id, $item){
		$data = array(
			'subcategory_id' => $subcategory_id,
			'supply_description' => $item['item'],
			'unit' => $item['unit'],
			'price' => $item['price'],
			'status' => 1
		);
		$this->db->insert('supply', $data);
	}

	function editItem($item_id, $supply_description, $unit, $price, $status){
		$data = array(
			'supply_description' => $supply_description,
			'unit' => $unit,
			'price' => $price,
			'status' => $status
		);
		$this->db->where('id', $item_id);
		$this->db->update('supply', $data);
	}

	function getItems(){
		$this->db->select('supply.*, category.category, subcategory.subcategory');
		$this->db->from('supply');
		$this->db->join('subcategory', 'supply.subcategory_id = subcategory.id');
		$this->db->join('category', 'subcategory.category_id = category.id');
		$query = $this->db->get();
		return $query->result();
	}

	function getSupply($subcategory_id){
		$this->db->select('id, item_description, price');
		$this->db->from('supply');
		$this->db->where('subcategory_id', $subcategory_id);
		$this->db->order_by("item_description", "asc");
		$query = $this->db->get();
		return $query->result();
	}

	function getAllUsers(){
		// SELECT user.id user_id, office.office_name office_name, user.name, user.position, user.status
		// FROM user
		// JOIN office
		// ON user.office_id = office.id
		// ORDER BY user.status DESC
		$this->db->select('user.id user_id, office.id office_id, office.office_name office_name, user.name, user.position, user.status');
		$this->db->from('user');
		$this->db->join('office', 'user.office_id = office.id');
		$this->db->order_by('user.status', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function saveUserChanges($user_id, $office_id, $name, $position, $status){
		$data = array(
			'office_id' => $office_id,
			'name' => $name,
			'position' => $position,
			'status' => $status
		);
		$this->db->where('id', $user_id);
		$this->db->update('user', $data);
	}

	function searchForDuplicateOffice($office_id){
		$this->db->select('user_id');
		$this->db->from('user');
		$this->db->where('office_id', $office_id);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}

	function getAllOffices(){
		$this->db->select('id office_id, office_name, status');
		$this->db->from('office');
		$query = $this->db->get();
		return $query->result();
	}

	function getOffices($user_id){
		$this->db->select('user.office_id');
		$this->db->from('user');
		$this->db->where('user.status', 1);
		$this->db->where('user.office_id', $user_id);
		$query = $this->db->get();
		$query_array = $query->result_array();

		$this->db->select('id, office_name');
		$this->db->from('office');
		$this->db->where_not_in('id', $query_array[0]);
		$this->db->order_by("office_name", "asc");
		$query = $this->db->get();
		return $query->result();
	}

	function getOfficesWithNoDesignation(){
		$this->db->select('user.office_id');
		$this->db->from('user');
		$this->db->where('user.status', 1);
		$query = $this->db->get();
		//echo $this->db->last_query();

		//print_r($query_array);
		$data = array();
		foreach($query->result() as $office_id){
			array_push($data, $office_id->office_id);
		}

		//print_r($data);
		// put query array to data array
		$this->db->select('office.id, office.office_name');
		$this->db->from('office');
		$this->db->where_not_in('office.id', $data);
		$this->db->order_by('office.office_name', 'asc');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	}

	function getUserTypes(){
		$this->db->select('id, type');
		$this->db->from('user_type');
		$query = $this->db->get();
		return $query->result();
	}

	function addUser($office_id, $name, $position, $password, $user_type, $status){
		$data = array(
			'office_id' => $office_id,
			'user_type_id' => $user_type,
			'name' => $name,
			'position' => $position,
			'password' => $password,
			'status' => $status
		);

		$this->db->insert('user', $data);
	}

	function addOffice($office_name, $status){
		$data = array(
			'office_name' => $office_name,
			'status' => $status
		);

		$this->db->insert('office', $data);
	}

	function editOffice($office_id, $office_name, $status){
		$data = array(
			'office_name' => $office_name,
			'status' => $status
		);

		$this->db->where('id', $office_id);
		$this->db->update('office', $data);
	}

	function search($search){
		$this->db->select('user.id user_id, office.id office_id, office.office_name office_name, user.name, user.position, user.status');
		$this->db->from('user');
		$this->db->join('office', 'user.office_id = office.id');
		$this->db->like('office.office_name', $search);
		$this->db->or_like('user.name', $search);
		$this->db->or_like('user.position', $search);
		$this->db->order_by('user.status', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function searchOffice($search){
		$this->db->select('office.id office_id, office.office_name office_name, office.status');
		$this->db->from('office');
		$this->db->like('office.office_name', $search);
		$this->db->order_by('office.status', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function addApprover($office_id, $first_lvl_id, $second_lvl_id, $third_lvl_id, $fourth_lvl_id){
		$data = array(
			'office_id' => $office_id,
			'first_lvl_id' => $first_lvl_id,
			'second_lvl_id' => $second_lvl_id,
			'third_lvl_id' => $third_lvl_id,
			'fourth_lvl_id' => $fourth_lvl_id,
			'status' => 1
		);
		$this->db->insert('approval', $data);
		$last_id = $this->db->insert_id();

		$data = array(
			'status' => 0
		);
		$this->db->where('office_id', $office_id);
		$this->db->where('id !=', $last_id);
		$this->db->update('approval', $data);
	}
}