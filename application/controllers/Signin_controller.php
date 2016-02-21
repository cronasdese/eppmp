<?php

class Signin_controller extends CI_Controller{
	function __construct() 
	{
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->model('admin_model');
		$data['users'] = $this->admin_model->getAllUsers();
		$this->load->view('ADMIN_Accounts', $data);
		// $this->load->model('admin_model');
		// $data['offices'] = $this->admin_model->getOfficesWithNoDesignation();
	}	

	public function validateAccount(){
		$office_id = $this->input->post('office_id');
		$password = $this->input->post('inputPassword');

		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}
		else{
			$data['user_details'] = $this->user_model->validateUser($office_id, $password);
			if($data['user_details'] == NULL){
				$this->load->view('login');
			}
			else{
				foreach ($data['user_details'] as $type) {
					$this->session->set_userdata('user_id', $type->user_id);
					$this->session->set_userdata('user_type_id', $type->user_type_id);
					if($type->user_type_id == 3){
						$this->load->view('USER_Create', $data);
					}
					else if($type->user_type_id == 4){
						$this->load->model('PPMP_model');
						print_r($type->user_id);
						$data['projects'] = $this->PPMP_model->getAllProjectsToBeApproved($type->user_id);
						$data['user_id'] = $type->user_id;
						print_r($data['projects']);
						$this->load->view('USER_Approve', $data);
					}
				}
			}
		}
	}

	public function getOfficeNames(){
		$office_names = $this->user_model->getOffices();
		echo json_encode($office_names);
	}
}
