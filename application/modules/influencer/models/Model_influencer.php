<?php
class Model_influencer extends CI_Model {

	function __construct() {
		parent::__construct();
        $this->load->database();	
	}

	// influencer	
	function insert_influencer($data){
		$this->db->insert('ci_influencer', $data); 
	}
	
	function get_influencer_single($id){
		$this->db->where("influencer_id", $id);
		$query = $this->db->get("ci_influencer");
		return $query->row();	
	}
	
	function update_influencer($data,$id){
		$this->db->where('influencer_id', $id);
		$this->db->update('ci_influencer', $data);
	}
	
	function delete_influencer($val){
		$this->db->where_in('influencer_id', $val);
		return $this->db->delete('ci_influencer');
	}
	// end influencer

}