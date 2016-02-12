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
		$ppmp_id = $this->PPMP_model->submitPPMP();
		foreach($_POST['items'] as $project_details){
		  	$this->PPMP_model->insertProjectDetails($project_details, $ppmp_id);
		}
	}
}
