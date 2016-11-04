<?php

class Link extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Links');
		$this->load->library('table');
		$this->load->library('form_validation');
	}
	
	function insert() {
		//Including validation library
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		//$this->form_validation->set_rules('website', 'Website Url', 'required|min_length[10]');

		if ($this->input->post('link_label') == '' || $this->input->post('link_url') == '' ) {
			//$this->load->view('insert_website');
			$data['main_content'] = 'link/insert_link';
			$this->load->view('templates/standard',$data);
			
		} else {
			//Setting values for tabel columns
			
			$data = array(
			'link_label' => trim($this->input->post('link_label')),
			'link_url' => trim($this->input->post('link_url'))
			);
			
			echo '<pre>';
			print_r($data);
			echo '</pre>';
			
			//Transfering data to Model
			$this->Links->insert_link($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			//$this->load->view('insert_view', $data);
			$data['main_content'] = 'link/insert_link';
			$this->load->view('templates/standard',$data);
		}
	}
	
	
	function show_link() {
		$id = 1;
		$data['link_data'] = $this->Links->show_link($id);
		$data['main_content'] = 'link/edit_link';
		$this->load->view('templates/standard',$data);
	}
	
	function update() {
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		if ($this->input->post('link_label') == '' || $this->input->post('link_url') == '' ) {
			$id= 1;
			$data['link_data'] = $this->Links->show_link($id);
			$data['main_content'] = 'link/edit_link';
			$this->load->view('templates/standard',$data);
		} else {
		
			$id= 1;
			$data = array(
			'link_label' => trim($this->input->post('link_label')),
			'link_url' => trim($this->input->post('link_url'))
			);
			
			$this->Links->update_link($id,$data);
			$msg = 'Updated Successfully';
			$data['message'] = $msg;
			$data['link_data'] = $this->Links->show_link($id);
			$data['main_content'] = 'link/edit_link';
			$this->load->view('templates/standard',$data);
			//$this->list_websites($msg);
		}
		
	}

}

?>  