<?php

class Admin_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function updateCategory($category){
		$data = array(
			'category' => $category,
			'status' => 1
		);
		$this->db->insert('category', $data);
		$this->db->select('id');
		$this->db->from('category');
		$this->db->where('category', $category);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function updateSubcategory($category_id, $subcategory){
		$data = array(
			'category_id' => $category_id,
			'subcategory' => $subcategory,
			'status' => 1
		);
		$this->db->insert('subcategory', $data);
	}

	function getSupply($subcategory_id){
		$this->db->select('id, item_description, price');
		$this->db->from('supply');
		$this->db->where('subcategory_id', $subcategory_id);
		$this->db->order_by("item_description", "asc");
		$query = $this->db->get();
		return $query->result();
	}
}