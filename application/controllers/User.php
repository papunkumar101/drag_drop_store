<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('User_model');
		
    }
 
	public function index(){
		$quest = $this->User_model->questions();
		$ans = $this->User_model->answer();
		$home_page = array(
          'questions' =>  $quest,
          'answer' =>  $ans,
		);
		// print_r($ans);exit;
		$this->load->view('includes/header');
		$this->load->view('home',$home_page);
		$this->load->view('includes/footer');
	}
	
	public function result_page(){
		$quest = $this->User_model->questions();
		$ans = $this->User_model->answer();
		$submit_table = $this->User_model->result_page();
		$result_page = array(
          'questions' =>  $quest,
          'answer' =>  $ans,
          'result_page' =>  $submit_table,
		);
		// echo '<pre/>';print_r($result_page);exit;
		$this->load->view('includes/header');
		$this->load->view('result_view',$result_page);
		$this->load->view('includes/footer');
	}

	public function answer_submit()
	{
		// print_r($_POST['submit_data']);
		$array = $this->input->post('submit_data');
		// $this->isArrayEmpty($array);
		$submit_data = base64_encode(serialize($array));
		$data = array(
			'submited_ans' => $submit_data,
			'user_id' => rand(0,9999),
		);
		$this->User_model->insert_user_ans($data);
		return true;
	}

	// public function isArrayEmpty(array $array): bool {
	// 	foreach($array as $key => $val) {
	// 		if ($val !== '' || $val !== null){
	// 			echo "<script>window.location.reload()</script>";
	// 		}
	// 	}
	// 	return true;
	// }

}
