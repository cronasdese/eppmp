<?php
class Admin_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->load->library('session');
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

	public function editOffice(){
		$office_name = $this->input->post('office_name');
		$status = $this->input->post('status');
		$office_id = $this->input->post('office_id');
		$added_office = $this->admin_model->editOffice($office_id, $office_name, $status);
		echo json_encode($added_office);
	}

	public function search(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$search = $this->input->post('search');
		$data['users'] = $this->admin_model->search($search);
		$this->load->view('ADMIN_Nav', $data);
		$this->load->view('ADMIN_Accounts', $data);
	}

	public function searchOffice(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$search = $this->input->post('search');
		$data['offices'] = $this->admin_model->searchOffice($search);
		$this->load->view('ADMIN_Nav', $data);
		$this->load->view('ADMIN_Office', $data);
	}

	public function addCategory(){
		$category = $this->input->post('category');
		$this->admin_model->addCategory($category);
		//$this-
	}
}