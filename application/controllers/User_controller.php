<?php

class User_controller extends CI_Controller{
	function __construct() 
	{
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_model');
	}

	public function saveEditUser(){
		$user_id = $this->session->userdata('user_id');
		$name = $this->input->post('name_edit');
		$old_password = $this->input->post('old_password_edit');
		$new_password = $this->input->post('new_password_edit');
		$this->user_model->saveEditUser($user_id, $name, $old_password, $new_password);
	}

	public function validatePassword(){
		$user_id = $this->session->userdata('user_id');
		$old_password = $this->input->post('old_password_edit');
		$validate = $this->user_model->validatePassword($user_id, $old_password);
		echo json_encode($validate);
	}
}
