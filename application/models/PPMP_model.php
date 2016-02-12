<?php

class PPMP_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}

	function submitPPMP(){
		$date_format = 'DATE_W3C';

		$date_submitted = standard_date($date_format);
		$data = array(
			'user_id' => 1,
			'date_submitted' => $date_submitted,
			'first_lvl_status' => 0,
			'second_lvl_status' => 0,
			'third_lvl_status' => 0,
			'fourth_lvl_status' => 0,
			'submitted' => 1
		);
		$this->db->insert('project', $data);
		$id = $this->db->insert_id();

		return $id;
	}

	function insertProjectDetails($project_data, $ppmp_id){
		$project_details = array(
			'project_id' => $ppmp_id, 
			'category_id' => $project_data['category'],
			'supply_id' => $project_data['items'],	
			//'supply_description' => ,
			'quantity' => $project_data['qty'],
			'price' => 1,
			'jan_qty' => $project_data['jan'],
			'feb_qty' => $project_data['feb'],
			'mar_qty' => $project_data['mar'],
			'apr_qty' => $project_data['apr'],
			'may_qty' => $project_data['may'],
			'jun_qty' => $project_data['jun'],
			'jul_qty' => $project_data['jul'],
			'aug_qty' => $project_data['aug'],
			'sep_qty' => $project_data['sep'],
			'oct_qty' => $project_data['oct'],
			'nov_qty' => $project_data['nov'],
			'dec_qty' => $project_data['dec']
		);
		//print_r($project_details);
		$this->db->insert('project_details', $project_details);
	}
}