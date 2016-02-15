<?php

class PPMP_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}

	function submitPPMP($user_id){
		$date_format = 'DATE_W3C';

		$date_submitted = standard_date($date_format);
		$data = array(
			'user_id' => $user_id,
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
		if($project_data['items'] != NULL){
			$project_details = array(
				'project_id' => $ppmp_id, 
				'category_id' => $project_data['category'],
				'supply_id' => $project_data['items'],	
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
			$project_detail_id = $this->db->insert_id();

			$this->db->select('supply_description');
			$this->db->from('supply');
			$this->db->where('id', $project_data['items']);
			$this->db->limit(1);
			$query = $this->db->get();
			//return an array result not an object
			$query_array = $query->result_array();
			$this->db->where('id', $project_detail_id);
			$this->db->update('project_details', $query_array['0']);
		}
		

	}

	function getProject($ppmp_id){
		$this->db->select('project.user_id, project.date_submitted, project.first_lvl_status, project.second_lvl_status, project.third_lvl_status, project.fourth_lvl_status, project.reason_for_rejection, office.office_name');
		$this->db->from('project');
		$this->db->join('user', 'project.user_id = user.id');
		$this->db->join('office', 'office.id = user.office_id');
		$this->db->where('project.id', $ppmp_id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function getProjectDetails($ppmp_id){
		$this->db->select('project_details.*, category.category category');
		$this->db->from('project_details');
		$this->db->join('category', 'project_details.category_id = category.id');
		$this->db->where('project_id', $ppmp_id);
		$this->db->order_by('category_id', 'asc');
		$query = $this->db->get()
;		return $query->result();
	}
}