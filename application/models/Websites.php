<?php
class Websites extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function insert_website($data){
		// Inserting in Table(students) of Database(college)
		
		$this->db->insert('website_details', $data);
	}
	
	public function list_websites()
    {
        $this->db->select('*');
        $this->db->from('website_details');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
	
	function delete_website($id){
		$this->db->where('id', $id);
		$this->db->delete('website_details');
	}
	
	function show_website($data){
		$this->db->select('*');
		$this->db->from('website_details');
		$this->db->where('id', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	function update_website($id,$data){
		$this->db->where('id', $id);
		$this->db->update('website_details', $data);
	}


}
?>