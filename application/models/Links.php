<?php
class Links extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function insert_link($data){
		// Inserting in Table(students) of Database(college)
		
		$this->db->insert('evato_header_link', $data);
	}
	
	function show_link($data){
		$this->db->select('*');
		$this->db->from('evato_header_link');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	function update_link($id,$data){
		$this->db->where('id', $id);
		$this->db->update('evato_header_link', $data);
	}


}
?>