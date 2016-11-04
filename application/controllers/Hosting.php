<?php

class Hosting extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Hostings');
		$this->load->library('table');
		$this->load->library('form_validation');
	}
	
	function insert() {
		//Including validation library
		

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		$this->form_validation->set_rules('website', 'Website Url', 'required|min_length[10]');

		//Validating Email Field
		$this->form_validation->set_rules('license_key', 'License Key', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE) {
			//$this->load->view('insert_website');
			$data['main_content'] = 'hosting/insert_hosting';
			$this->load->view('templates/standard',$data);
		} else {
			$data = array(
			'website' => trim($this->input->post('website')),
			'license_key' => trim($this->input->post('license_key')),
			
			'is_active' => $this->input->post('is_active')
			);
			
			
			//Transfering data to Model
			$this->Hostings->insert_hosting($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			//$this->load->view('insert_view', $data);
			$data['main_content'] = 'hosting/insert_hosting';
			$this->load->view('templates/standard',$data);
		}
	}
	
	function list_hostings($msg='') {
		$data['list'] = $this->Hostings->list_hostings();
		$data['message'] = $msg;
		$data['main_content'] = 'hosting/list_hosting';
		$this->load->view('templates/standard',$data);
	}
	
	function delete() {
		$id = $this->uri->segment(3);
		$this->Hostings->delete_hosting($id);
		$msg = 'Deleted Successfully';
		$this->list_hostings($msg);
	}
	
	function show_hosting() {
		$id = $this->uri->segment(3);
		$data['website_data'] = $this->Hostings->show_hosting($id);
		$data['main_content'] = 'hosting/edit_hosting';
		$this->load->view('templates/standard',$data);
	}
	
	function update() {
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('website', 'Website Url', 'required|min_length[10]');

		$this->form_validation->set_rules('license_key', 'License Key', 'required|min_length[10]');
		
		if ($this->form_validation->run() == FALSE) {
			$id= $this->input->post('website_id');
			$data['website_data'] = $this->Hostings->show_hosting($id);
			$data['main_content'] = 'hosting/edit_hosting';
			$this->load->view('templates/standard',$data);
		} else {
			
			$dutch = $this->input->post('dutch');
			$french = $this->input->post('french');
			$english = $this->input->post('english');
			$german = $this->input->post('german');
			
			$id= $this->input->post('website_id');
			$data = array(
			'website' => trim($this->input->post('website')),
			'license_key' => trim($this->input->post('license_key')),
			
			'is_active' => $this->input->post('is_active')
			);
			
			$this->Hostings->update_hosting($id,$data);
			$msg = 'Updated Successfully';
			$this->list_hostings($msg);
		}
		
	}
	
	function check_hosting_license() {
		$license_key = $this->uri->segment(3);
		$data = $this->Hostings->check_hosting_license($license_key);
		
		header('Content-type: application/json');
		echo  $hosting_detail=json_encode($data);
		
		
	}
	

}

?>