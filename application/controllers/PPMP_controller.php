<?php

class PPMP_controller extends CI_Controller{
	
	function __construct() 
	{
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('PPMP_model');
		$this->load->model('user_model');
	}

	public function submitPPMP(){
		//print_r($_POST);
		$user_id = $this->input->post('user_id');
		$title = $this->input->post('title');
		$ppmp_id = $this->PPMP_model->submitPPMP($user_id, $title);

		foreach($_POST['items'] as $project_details){
		  	$this->PPMP_model->insertProjectDetails($project_details, $ppmp_id);
		}

		$data['project'] = $this->PPMP_model->getProject($ppmp_id);
		$data['project_details'] = $this->PPMP_model->getProjectDetails($ppmp_id);
		//print_r($data);
		foreach ($data['project'] as $office_id) {
			//print_r($office_id);
			$data['first_approver'] = $this->PPMP_model->getProjectFirstApprover($office_id->office_id);
			$data['second_approver'] = $this->PPMP_model->getProjectSecondApprover($office_id->office_id);
			$data['third_approver'] = $this->PPMP_model->getProjectThirdApprover($office_id->office_id);
			$data['fourth_approver'] = $this->PPMP_model->getProjectFourthApprover($office_id->office_id);
		}
		$data['user_type_id'] = $this->session->userdata('user_type_id');
		//print_r($data);
		$data['user_details'] = $this->user_model->getUserDetails($user_id);
		$this->load->view('NAV', $data);
		$this->load->view('USER_ViewPPMP', $data);
	}

	public function rejectPPMP(){
		//print_r($_POST);
		$reason_for_rejection = $this->input->post('reason_for_rejection');
		$ppmp_id = $this->input->post('project_id');

		$this->PPMP_model->rejectPPMP($ppmp_id, $reason_for_rejection);
		
		$data['project'] = $this->PPMP_model->getProject($ppmp_id);
		$data['project_details'] = $this->PPMP_model->getProjectDetails($ppmp_id);
		foreach ($data['project'] as $office_id) {
			//print_r($office_id);
			$data['first_approver'] = $this->PPMP_model->getProjectFirstApprover($office_id->office_id);
			$data['second_approver'] = $this->PPMP_model->getProjectSecondApprover($office_id->office_id);
			$data['third_approver'] = $this->PPMP_model->getProjectThirdApprover($office_id->office_id);
			$data['fourth_approver'] = $this->PPMP_model->getProjectFourthApprover($office_id->office_id);
		}
		//print_r($data);
		$data['user_details'] = $this->user_model->getUserDetails($this->session->userdata('user_id'));
		$data['user_type_id'] = $this->session->userdata('user_type_id');
		$this->load->view('NAV', $data);
		$this->load->view('USER_ViewPPMP', $data);
	}

	public function approvePPMP(){
		//print_r($_POST);
		$ppmp_id = $this->input->post('project_id');
		$this->PPMP_model->approvePPMP($ppmp_id);

		$data['project'] = $this->PPMP_model->getProject($ppmp_id);
		$data['project_details'] = $this->PPMP_model->getProjectDetails($ppmp_id);
		foreach ($data['project'] as $office_id) {
			//print_r($office_id);
			$data['first_approver'] = $this->PPMP_model->getProjectFirstApprover($office_id->office_id);
			$data['second_approver'] = $this->PPMP_model->getProjectSecondApprover($office_id->office_id);
			$data['third_approver'] = $this->PPMP_model->getProjectThirdApprover($office_id->office_id);
			$data['fourth_approver'] = $this->PPMP_model->getProjectFourthApprover($office_id->office_id);
		}
		//print_r($data);
		$data['user_details'] = $this->user_model->getUserDetails($this->session->userdata('user_id'));
		$data['user_type_id'] = $this->session->userdata('user_type_id');
		$this->load->view('NAV', $data);
		$this->load->view('USER_ViewPPMP', $data);
	}

	public function viewPPMP(){
		$ppmp_id = $_POST['project_id'];
		$data['project'] = $this->PPMP_model->getProject($ppmp_id);
		$data['project_details'] = $this->PPMP_model->getProjectDetails($ppmp_id);
		//print_r($data);
		foreach ($data['project'] as $office_id) {
			//print_r($office_id);
			$data['first_approver'] = $this->PPMP_model->getProjectFirstApprover($office_id->office_id);
			$data['second_approver'] = $this->PPMP_model->getProjectSecondApprover($office_id->office_id);
			$data['third_approver'] = $this->PPMP_model->getProjectThirdApprover($office_id->office_id);
			$data['fourth_approver'] = $this->PPMP_model->getProjectFourthApprover($office_id->office_id);
		}
		//print_r($data);
		$data['user_details'] = $this->user_model->getUserDetails($this->session->userdata('user_id'));
		$data['user_type_id'] = $this->session->userdata('user_type_id');
		$this->load->view('NAV', $data);
		$this->load->view('USER_ViewPPMP', $data);
	}

	public function consolidate(){
		
	}

	public function generatePurchaseOrder(){
		$month = $this->input->post('month');
		$ppmp_id = $this->input->post('project_id');
		$data['purchase_order'] = $this->PPMP_model->generatePurchaseOrder($ppmp_id, $month);
		$data['user_details'] = $this->user_model->getUserDetails($this->session->userdata('user_id'));
		$data['user_type_id'] = $this->session->userdata('user_type_id');
		$this->load->view('NAV', $data);
		$this->load->view('PR', $data);
	}
}
