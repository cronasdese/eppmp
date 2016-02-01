<?php
class Users_controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('supplies_model');
	}

	public function getCategory(){
		$offices = $this->supplies_model->getOffice();
		echo json_encode($offices);
	}
}