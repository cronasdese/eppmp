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
		$this->load->view('login');
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
				$this->load->view('try2', $data);
			}
		}
	}

	public function getOfficeNames(){
		$office_names = $this->user_model->getOffices();
		echo json_encode($office_names);
	}

	// public function _usernameRegex($user_name){
	// 	$pattern = '/^([0-9]{3})([-])([0-9]{5})$/';
	// 	if(preg_match($pattern, $user_name)){
	// 		return TRUE;
	// 	}
	// 	else{
	// 		return FALSE;
	// 	}
	// }
}
