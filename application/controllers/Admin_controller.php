<?php
class Admin_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function updateCategory(){
		$category = $this->input->post('category');
		$subcategory = $this->input->post('subcategory');

		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('ADMIN_AddCategory');
		}
		else{
			$category_id = $this->admin_model->updateCategory($category);
      		//$this->admin_model->updateSubcategory($category_id, $subcategory);
      	}
	}
}