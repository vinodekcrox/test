<?php

class Website extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Websites');
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
			$data['main_content'] = 'website/insert_website';
			$this->load->view('templates/standard',$data);
		} else {
			//Setting values for tabel columns
			$dutch = $this->input->post('dutch');
			$french = $this->input->post('french');
			$english = $this->input->post('english');
			$german = $this->input->post('german');
			
			$dutch = ($dutch == '') ? 'N' : $dutch;
			$french = ($french == '') ? 'N' : $french;
			$english = ($english == '') ? 'N' : $english;
			$german = ($german == '') ? 'N' : $german;
			
			$data = array(
			'website' => trim($this->input->post('website')),
			'license_key' => trim($this->input->post('license_key')),
			'sync_products' => $this->input->post('sync_products'),
			'sync_images' => $this->input->post('sync_images'),
			'sync_customers' => $this->input->post('sync_customers'),
			'sync_categories' => $this->input->post('sync_categories'),
			'sync_sublogin' => $this->input->post('sync_sublogin'),
			
			'appendix' => $this->input->post('appendix'),
			
			'dutch' => $dutch,
			'french' => $french,
			'english' => $english,
			'german' => $german,
			
			'invoice_history' => $this->input->post('invoice_history'),
			'delivery_history' => $this->input->post('delivery_history'),
			'quotation_history' => $this->input->post('quotation_history'),
			'orders_history' => $this->input->post('orders_history'),
			'backorders' => $this->input->post('backorders'),
			'purchase_history' => $this->input->post('purchase_history'),
			'service_history' => $this->input->post('service_history'),
			'helpdesk_history' => $this->input->post('helpdesk_history'),
			'account_history' => $this->input->post('account_history'),
			'is_active' => $this->input->post('is_active')
			);
			
			
			//Transfering data to Model
			$this->Websites->insert_website($data);
			$data['message'] = 'Data Inserted Successfully';
			//Loading View
			//$this->load->view('insert_view', $data);
			$data['main_content'] = 'website/insert_website';
			$this->load->view('templates/standard',$data);
		}
	}
	
	function list_websites($msg='') {
		$data['list'] = $this->Websites->list_websites();
		$data['message'] = $msg;
		$data['main_content'] = 'website/list_website';
		$this->load->view('templates/standard',$data);
	}
	
	function delete() {
		$id = $this->uri->segment(3);
		$this->Websites->delete_website($id);
		$msg = 'Deleted Successfully';
		$this->list_websites($msg);
	}
	
	function show_website() {
		$id = $this->uri->segment(3);
		$data['website_data'] = $this->Websites->show_website($id);
		$data['main_content'] = 'website/edit_website';
		$this->load->view('templates/standard',$data);
	}
	
	function update() {
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('website', 'Website Url', 'required|min_length[10]');

		$this->form_validation->set_rules('license_key', 'License Key', 'required|min_length[10]');
		
		if ($this->form_validation->run() == FALSE) {
			$id= $this->input->post('website_id');
			$data['website_data'] = $this->Websites->show_website($id);
			$data['main_content'] = 'website/edit_website';
			$this->load->view('templates/standard',$data);
		} else {
			
			$dutch = $this->input->post('dutch');
			$french = $this->input->post('french');
			$english = $this->input->post('english');
			$german = $this->input->post('german');
			
			$dutch = ($dutch == '') ? 'N' : $dutch;
			$french = ($french == '') ? 'N' : $french;
			$english = ($english == '') ? 'N' : $english;
			$german = ($german == '') ? 'N' : $german;
		
			$id= $this->input->post('website_id');
			$data = array(
			'website' => trim($this->input->post('website')),
			'license_key' => trim($this->input->post('license_key')),
			'sync_products' => $this->input->post('sync_products'),
			'sync_images' => $this->input->post('sync_images'),
			'sync_customers' => $this->input->post('sync_customers'),
			'sync_categories' => $this->input->post('sync_categories'),
			'sync_sublogin' => $this->input->post('sync_sublogin'),
			'appendix' => $this->input->post('appendix'),
			'dutch' => $dutch,
			'french' => $french,
			'english' => $english,
			'german' => $german,
			'invoice_history' => $this->input->post('invoice_history'),
			'delivery_history' => $this->input->post('delivery_history'),
			'quotation_history' => $this->input->post('quotation_history'),
			'orders_history' => $this->input->post('orders_history'),
			'backorders' => $this->input->post('backorders'),
			'purchase_history' => $this->input->post('purchase_history'),
			'service_history' => $this->input->post('service_history'),
			'helpdesk_history' => $this->input->post('helpdesk_history'),
			'account_history' => $this->input->post('account_history'),
			'is_active' => $this->input->post('is_active')
			);
			
			$this->Websites->update_website($id,$data);
			$msg = 'Updated Successfully';
			$this->list_websites($msg);
		}
		
	}

}

?>