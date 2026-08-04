<?php
class Model_faqs extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	function get_data_list(){		
		$this->db->order_by("faqs_id","asc");
		$query = $this->db->get("ci_faqs");
			
		return $query->result();
	}
	
	function insert_data($data){
		$this->db->insert('ci_faqs', $data); 
	}
	
	function get_data_single($id){
		$this->db->where("faqs_id", $id);
		$query = $this->db->get("ci_faqs");
		return $query->row();	
	}
	
	function update_data($data,$id){
		$this->db->where('faqs_id', $id);
		$this->db->update('ci_faqs', $data);
	}
	
	function delete_data($val){
		$this->db->where_in('faqs_id', $val);
		return $this->db->delete('ci_faqs');
	}
}