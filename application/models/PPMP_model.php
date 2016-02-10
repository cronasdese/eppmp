<?php

class PPMP_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->helper('date');
	}

	function submitPPMP($data_array){
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

		if(is_array($data_array) || is_object($data_array)){
  			foreach($data_array as $object){
  				// echo '<li><a href="#">' . $object->ID . '</a></li>
  				// <li><a href="#">' . $object->full_name . '</a></li>';
  				$project_details = array(
  					'project_id' => $id,
  					'supply_id' => $object->supply_id,
  					'supply_description' => $object->supply_description,
  					'quantity' => $object->quantity,
  					'price' => $object->price,
  					'jan' => $object->jan,
  					'feb' => $object->feb,
  					'mar' => $object->mar,
  					'apr' => $object->apr,
  					'may' => $object->may,
  					'jun' => $object->jun,
  					'jul' => $object->jul,
  					'aug' => $object->aug,
  					'sep' => $object->sep,
  					'oct' => $object->oct,
  					'nov' => $object->nov,
  					'dec' => $object->dec
  				);
  				$this->db->insert('project_details', $project_details);
  			}
  		}
	}
}