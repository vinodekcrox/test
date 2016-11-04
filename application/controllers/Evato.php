<?php

class Evato extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Evato_model');
		$this->load->library('table');
		$this->load->library('form_validation');
	}
	
	function check_license() {
		$license_key = $this->uri->segment(3);
		$data = $this->Evato_model->check_license($license_key);
		
		header('Content-type: application/json');
		echo json_encode($data);
	}
	
	function global_link() {
		$id = $this->uri->segment(3);
		$data = $this->Evato_model->global_link($id);
		
		header('Content-type: application/json');
		echo json_encode($data);
	}

}

?>