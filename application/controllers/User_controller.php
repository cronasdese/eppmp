<?php

class User_controller extends CI_Controller{
	function __construct() 
	{
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('PPMP_model');
	}

	public function saveEditUser(){
		$user_id = $this->session->userdata('user_id');
		$name = $this->input->post('name_edit');
		$new_password = $this->input->post('new_password_edit');
		$this->user_model->saveEditUser($user_id, $name, $new_password);

		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$data['projects_submitted'] = $this->PPMP_model->countProjectsSubmitted($user_id);
		$data['projects_approved'] = $this->PPMP_model->countProjectsApproved($user_id);
		$data['projects_rejected'] = $this->PPMP_model->countProjectsRejected($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('USER_Profile', $data);
	}

	public function validatePassword(){
		$user_id = $this->session->userdata('user_id');
		$old_password = $this->input->post('old_password');
		$validate = $this->user_model->validatePassword($user_id, $old_password);
		echo json_encode($validate);
	}
}
