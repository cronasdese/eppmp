<?php
class Supplies_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('supplies_model');
	}

	public function getCategory(){
		$categories = $this->supplies_model->getCategory();
		echo json_encode($categories);
	}

	public function getSubcategory(){
		$category_id = $this->input->post('category');
		$subcategories = $this->supplies_model->getSubCategory($category_id);
		echo json_encode($subcategories);	
	}

	public function getSupply(){
		$subcategory_id = $this->input->post('subcategory');
		$supplies = $this->supplies_model->getSubCategory($subcategory_id);
		echo json_encode($supplies);	
	}

	public function getSupplyDetails(){
		$supply_id = $this->input->post('supply');
		$supply_details = $this->supplies_model->getSupplyDetails($supply_id);
		echo json_encode($supply_details);
	}

	public function getSuppliesWithSubcategory(){
		$category_id = $this->input->post('category');
		$supplies_with_subcategory = $this->supplies_model->getSuppliesWithSubcategory($category_id);
		echo json_encode($supplies_with_subcategory);
	}
}