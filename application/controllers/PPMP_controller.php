<?php

class PPMP_controller extends CI_Controller{
	
	function __construct() 
	{
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('PPMP_model');
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
		$this->load->view('USER_ViewPPMP', $data);
	}
}
