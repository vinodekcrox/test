<?php
class Hostings extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function insert_hosting($data){
		// Inserting in Table(students) of Database(college)
		
		$this->db->insert('hosting_details', $data);
	}
	
	public function list_hostings()
    {
        $this->db->select('*');
        $this->db->from('hosting_details');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	
	function delete_hosting($id){
		$this->db->where('id', $id);
		$this->db->delete('hosting_details');
	}
	
	function show_hosting($data){
		$this->db->select('*');
		$this->db->from('hosting_details');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	function update_hosting($id,$data){
		$this->db->where('id', $id);
		$this->db->update('hosting_details', $data);
	}
	
	function check_hosting_license($license_key){
		$this->db->select('*');
		$this->db->from('hosting_details');
		$this->db->where('license_key', $license_key);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


}
?>