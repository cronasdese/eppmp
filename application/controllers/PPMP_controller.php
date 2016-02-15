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
		$ppmp_id = $this->PPMP_model->submitPPMP($user_id);

		foreach($_POST['items'] as $project_details){
		  	$this->PPMP_model->insertProjectDetails($project_details, $ppmp_id);
		}

		$data['project'] = $this->PPMP_model->getProject($ppmp_id);
		$data['project_details'] = $this->PPMP_model->getProjectDetails($ppmp_id);
		//print_r($data);
		$this->load->view('USER_ViewPPMP', $data);
	}
}
