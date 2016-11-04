<?php
class Evato_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	
	function check_license($license_key){
		$this->db->select('*');
		$this->db->from('website_details');
		$this->db->where('license_key', $license_key);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	function global_link($id){
		$this->db->select('*');
		$this->db->from('evato_header_link');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
}
?>