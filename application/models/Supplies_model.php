<?php

class Supplies_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function getCategory(){
		$this->db->select('id, category');
		$this->db->from('category');
		$this->db->where('status', 1);
		$this->db->order_by('category', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getSubCategory($category_id){
		$this->db->select('id, subcategory');
		$this->db->from('subcategory');
		$this->db->where('category_id', $category_id);
		$this->db->where('status', 1);
		$this->db->order_by('subcategory', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getSupply($subcategory_id){
		$this->db->select('id, item_description, price');
		$this->db->from('supply');
		$this->db->where('subcategory_id', $subcategory_id);
		$this->db->order_by('item_description', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getSupplyDetails($supply_id){
		$this->db->select('unit, price');
		$this->db->from('supply');
		$this->db->where('id', $supply_id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function getSuppliesWithSubcategory($category_id){
		$this->db->select('subcategory.subcategory subcategory, supply.id item_id, supply.supply_description item_description');
		$this->db->from('supply');
		$this->db->join('subcategory', 'supply.subcategory_id = subcategory.id');
		$this->db->where('category_id', $category_id);
		$this->db->where('supply.status', 1);
		$this->db->order_by('item_description', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	function getSupplyDescriptionFromPPMP(){
		$this->db->distinct();
		$this->db->select('supply_description');
		$this->db->from('project_details');
		$this->db->order_by('supply_description', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	function getCategoryWithSubcategory(){
		$this->db->distinct();
		$this->db->select('category.id, category.category');
		$this->db->from('subcategory');
		$this->db->join('category', 'subcategory.category_id = category.id');
		$query = $this->db->get();
		return $query->result();
	}
}