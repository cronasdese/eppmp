<?php
class Admin_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function insertCategory(){
		$category = $this->input->post('category');
		$subcategory = $this->input->post('subcategory');

		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Subcategory', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('ADMIN_ADDCategory');
		}
		else{
			$category_id = $this->admin_model->insertCategory($category);
      		$this->admin_model->insertSubcategory($category_id, $subcategory);
      	}
	}

	public function getAllUsers(){
		$data['users'] = $this->admin_model->getAllUsers();
		$this->load->view('ADMIN_Accounts');
	}

	public function getOffices(){
		$user_id = $this->input->post('user_id');
		$offices = $this->admin_model->getOffices($user_id);
		echo json_encode($offices);
	}

	public function saveUserChanges(){
		$user_id = $this->input->post('user_id');
		$office_id = $this->input->post('office_id');
		$name = $this->input->post('name');
		$position = $this->input->post('position');
		$status = $this->input->post('status');	
		$userChange = $this->admin_model->saveUserChanges($user_id, $office_id, $name, $position, $status);
		echo json_encode($userChange);          
	}

	public function searchForDuplicateOffice(){
		$office_id = $this->input->post('office_id');
		$office_duplicate = $this->admin_model->searchForDuplicateOffice($office_id);
		echo json_encode($office_duplicate);
	}

	public function getOfficesWithNoDesignation(){
		$offices = $this->admin_model->getOfficesWithNoDesignation();
		echo json_encode($offices);
	}

	public function getUserTypes(){
		$user_types = $this->admin_model->getUserTypes();
		echo json_encode($user_types);
	}

	public function addUser(){
		$office_id = $this->input->post('office_id');
		$name = $this->input->post('name');
		$position = $this->input->post('position');
		$password = $this->input->post('password');
		$user_type = $this->input->post('user_type');
		$status = $this->input->post('status');
		$added_user = $this->admin_model->addUser($office_id, $name, $position, $password, $user_type, $status);
		echo json_encode($added_user);
	}

	public function addOffice(){
		$office_name = $this->input->post('office_name');
		$status = $this->input->post('status');
		$added_office = $this->admin_model->addOffice($office_name, $status);
		echo json_encode($added_office);
	}

	public function search(){
		$search = $this->input->post('search');
		$data['users'] = $this->admin_model->search($search);

		$this->load->view('ADMIN_Accounts', $data);
	}
}