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
		$data_array = $this->input->post('data_array');
		$data = json_decode($data_array);
		$values = $this->PPMP_model->submitPPMP($data_array);
		echo json_encode($values);
	}
}
