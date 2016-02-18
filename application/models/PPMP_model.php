<?php

class PPMP_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}

	function submitPPMP($user_id, $title){
		$date_format = 'DATE_W3C';

		$date_submitted = standard_date($date_format);
		$data = array(
			'user_id' => $user_id,
			'title' => $title,
			'date_submitted' => $date_submitted,
			'first_lvl_status' => 1,
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
		if(trim($project_data['iteminput']) == ""){
			$this->db->select('supply_description, unit');
			$this->db->from('supply');
			$this->db->where('id', $project_data['items']);
			$this->db->limit(1);
			$query = $this->db->get();
			//return an array result not an object
			$query_array = $query->result_array();

			$project_details = array(
				'project_id' => $ppmp_id, 
				'category_id' => $project_data['category'],
				'supply_id' => $project_data['items'],	
				'supply_description' => $query_array['0']['supply_description'],
				'quantity' => $project_data['qty'],
				'unit' => $query_array['0']['unit'],
				'price' => $project_data['unitprice'],
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
		}
		else{
			$project_details = array(
				'project_id' => $ppmp_id, 
				'category_id' => $project_data['category'],
				'supply_id' => NULL,
				'supply_description' => $project_data['iteminput'],	
				'quantity' => $project_data['qty'],
				'price' => $project_data['unitprice'],
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
			$this->db->insert('project_details', $project_details);
			//print_r('2');
		}

	}

	function getProject($ppmp_id){
		$this->db->select('project.id project_id, project.user_id, project.date_submitted, project.first_lvl_status, project.second_lvl_status, project.third_lvl_status, project.fourth_lvl_status, project.reason_for_rejection, project.title title, office.id office_id, office.office_name');
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
		$query = $this->db->get();
		return $query->result();
	}

	function getProjectFirstApprover($office_id){
		$this->db->select('user.name, user.position');
		$this->db->from('approval');
		$this->db->join('user', 'approval.first_lvl_id = user.id');
		$this->db->where('approval.office_id', $office_id);
		$this->db->order_by('approval.id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function getProjectSecondApprover($office_id){
		$this->db->select('user.name, user.position');
		$this->db->from('approval');
		$this->db->join('user', 'approval.second_lvl_id = user.id');
		$this->db->where('approval.office_id', $office_id);
		$this->db->order_by('approval.id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function getProjectThirdApprover($office_id){
		$this->db->select('user.name, user.position');
		$this->db->from('approval');
		$this->db->join('user', 'approval.third_lvl_id = user.id');
		$this->db->where('approval.office_id', $office_id);
		$this->db->order_by('approval.id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function getProjectFourthApprover($office_id){
		$this->db->select('user.name, user.position');
		$this->db->from('approval');
		$this->db->join('user', 'approval.fourth_lvl_id = user.id');
		$this->db->where('approval.office_id', $office_id);
		$this->db->order_by('approval.id', 'desc');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();
	}

	function getAllProjects($user_id){
		// for Projects view
		$this->db->select('project.id project_id, project.title project_title, project.date_submitted date_submitted, office.office_name office_name, SUM(project_details.quantity*project_details.price) estimated_budget, project.first_lvl_status first_lvl_status, project.second_lvl_status second_lvl_status, project.third_lvl_status third_lvl_status, project.fourth_lvl_status fourth_lvl_status');
		$this->db->from('project');
		$this->db->join('project_details', 'project_id = project_details.project_id');
		$this->db->join('user', 'project.user_id = user.id');
		$this->db->join('office', 'user.office_id = office.id');
		$this->db->where('user.id', $user_id);
		$this->db->where('project.submitted', 1);
		$query = $this->db->get();
		return $query->result();
	}

	function getAllProjectsToBeApproved($user_id){
		//for USER_Approve view	
		$this->db->select('project.id project_id, project.title project_title, office.office_name office_name, project.date_submitted date_submitted, SUM(project_details.quantity*project_details.price) estimated_budget, approval.first_lvl_id, approval.second_lvl_id, approval.third_lvl_id, approval.fourth_lvl_id, project.first_lvl_status, project.second_lvl_status, project.third_lvl_status, project.fourth_lvl_status');
		$this->db->from('approval');
		$this->db->join('office', 'approval.office_id = office.id');
		$this->db->join('user', 'office.id = user.office_id');
		$this->db->join('project', 'user.id = project.user_id');
		$this->db->join('project_details', 'project.id = project_details.project_id');
		$this->db->where('approval.first_lvl_id', $user_id);
		$this->db->or_where('approval.second_lvl_id', $user_id);
		$this->db->or_where('approval.third_lvl_id', $user_id);
		$this->db->or_where('approval.fourth_lvl_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}

	function rejectPPMP($ppmp_id, $reason_for_rejection){
		//for USER_Approve rejection
		$this->db->select('project.*');
		$this->db->from('project');
		$this->db->where('id', $ppmp_id);
		$query = $this->db->get();
		$query_array = $query->result_array();

		$project = array();
		//print_r($query_array);
		if($query_array[0]['second_lvl_status'] == 0){
			$project = array(
				'second_lvl_status' => 2,
				'reason_for_rejection' => $reason_for_rejection
			);
		}
		else if($query_array[0]['third_lvl_status'] == 0){
			$project = array(
				'third_lvl_status' => 2,
				'reason_for_rejection' => $reason_for_rejection
			);
		}
		else if($query_array[0]['fourth_lvl_status'] == 0){
			$project = array(
				'fourth_lvl_status' => 2,
				'reason_for_rejection' => $reason_for_rejection
			);
		}

		$this->db->where('id', $ppmp_id);
		$this->db->update('project', $project);
	}

	function approvePPMP($ppmp_id){
		//for USER_Approve approve
		$this->db->select('project.*');
		$this->db->from('project');
		$this->db->where('id', $ppmp_id);
		$query = $this->db->get();
		$query_array = $query->result_array();

		$project = array();
		print_r($query_array);
		if($query_array[0]['second_lvl_status'] == 0){
			$project = array(
				'second_lvl_status' => 1
			);
		}
		else if($query_array[0]['third_lvl_status'] == 0){
			$project = array(
				'third_lvl_status' => 1
			);
		}
		else if($query_array[0]['fourth_lvl_status'] == 0){
			$project = array(
				'fourth_lvl_status' => 1
			);
		}

		$this->db->where('id', $ppmp_id);
		$this->db->update('project', $project);
	}
}