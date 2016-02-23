<?php

class Pages_controller extends CI_Controller{
	function __construct() 
	{
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('PPMP_model');
		$this->load->model('admin_model');
	}

	public function createPPMP()
	{
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('USER_Create', $data);
	}	

	public function viewProjects(){
		$user_id = $this->session->userdata('user_id');
		$user_type_id = $this->session->userdata('user_type_id');
		if($user_type_id == 4){
			$data['projects'] = $this->PPMP_model->getAllProjectsToBeApproved($user_id);
		}
		else{
			$data['projects'] = $this->PPMP_model->getAllProjects($user_id);
		}
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$data['user_type_id'] = $user_type_id;
		$this->load->view('NAV', $data);
		if($user_type_id == 4){
			$this->load->view('Projects', $data);
		}
		else{
			$this->load->view('Projects', $data);
		}
	}

	public function searchProjects(){
		$user_id = $this->session->userdata('user_id');
		$search = $this->input->post('search');
		$user_type_id = $this->session->userdata('user_type_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$data['user_type_id'] = $user_type_id;
		if($user_type_id == 4){
			//print_r($user_type_id);
			$data['projects'] = $this->PPMP_model->searchProjectsToBeApproved($search, $user_id);
		}
		else{
			//print_r($user_type_id);
			$data['projects'] = $this->PPMP_model->searchProjects($search, $user_id);
		}
		$this->load->view('NAV', $data);
		$this->load->view('Projects', $data);
	}

	public function adminHome(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('ADMIN_Nav', $data);
		$this->load->view('ADMIN_Home');
	}

	public function home(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('USER_HOME', $data);
	}

	public function consolidate(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('Consolidate');
	}

	public function generateAPP(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('Consolidate');
	}

	public function profile(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$data['projects_submitted'] = $this->PPMP_model->countProjectsSubmitted($user_id);
		$data['projects_approved'] = $this->PPMP_model->countProjectsApproved($user_id);
		$data['projects_rejected'] = $this->PPMP_model->countProjectsRejected($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('USER_Profile', $data);
	}

	public function adminAdd(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('ADMIN_Nav', $data);
		$this->load->view('ADMIN_Add');
	}

	public function adminAccounts(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$data['users'] = $this->admin_model->getAllUsers();
		$this->load->view('ADMIN_Nav', $data);
		$this->load->view('ADMIN_Accounts');
	}

	public function adminOffices(){
		$user_id = $this->session->userdata('user_id');
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$data['offices'] = $this->admin_model->getAllOffices();
		$this->load->view('ADMIN_Nav', $data);
		$this->load->view('ADMIN_Office', $data);
	}

	public function logout(){
		session_destroy();
		$this->load->view('login');
	}
}
