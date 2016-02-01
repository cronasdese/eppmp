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
		$this->load->view('ADMIN_AddCategory');
	}	

	public function validateAccount(){
		$user_id = $this->input->post('inputUserID');
		$password = $this->input->post('inputPassword');

		$this->form_validation->set_rules('inputUserID', 'User ID', 'trim|required|xss_clean|callback__usernameRegex');
		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}
		else{
			$validate = $this->user_model->validateUser($user_id, $password);
			if($validate == NULL){
				$this->load->view('login');
			}
			else{
				$this->load->view('USER_Home');
			}
		}
	}

	public function _usernameRegex($user_name){
		$pattern = '/^([0-9]{3})([-])([0-9]{5})$/';
		if(preg_match($pattern, $user_name)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
