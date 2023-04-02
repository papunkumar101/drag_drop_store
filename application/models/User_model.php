<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
 
	public function insert($data){
		// print_r($data);exit;
		$this->load->database();
		$que = $this->db->insert('users',$data);
		// print_r($this->db->last_query());exit;
        return true;
	}

	public function insert_user_ans($data){ 
		$this->load->database();
		$que = $this->db->insert('submit_table',$data); 
        return true;
	}


	public function questions(){
		$res = $this->db->get('questions_table');
		return $res->result_array();
	}

	public function answer(){
		$res = $this->db->get('answer_table');
		return $res->result_array();
	}

	public function result_page(){ 
        $this->db->order_by("added_date", "desc");
		$res = $this->db->get('submit_table');
		return $res->result_array();
	}
 
}
