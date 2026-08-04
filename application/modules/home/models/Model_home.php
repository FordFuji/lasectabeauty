<?php
class Model_home extends CI_Model {

	function __construct() {
		parent::__construct();
        $this->load->database();	
	}

	// banner	
	function insert_banner($data){
		$this->db->insert('ci_banner1', $data); 
	}
	 
	function get_banner_single($id){
		$this->db->where("banner_id", $id);
		$query = $this->db->get("ci_banner");
		return $query->row();	
	}
	
	function update_banner($data, $id){
		$this->db->where('banner_id', $id);
		$this->db->update('ci_banner', $data);
	}
	
	function delete_banner($val){
		$this->db->where_in('banner_id', $val);
		return $this->db->delete('ci_banner');
	}

	function getBannerResult($side) {
		$this->db->where('banner_side', $side);
		$this->db->order_by('banner_id', 'asc');
		$query = $this->db->get('ci_banner');

		return $query->result();
	}
	// end banner

	// new_arrivals
	function get_new_arrivals_single(){
		$this->db->where("new_arrivals_id", 1);
		$query = $this->db->get("ci_new_arrivals");
		return $query->row();	
	}
	
	function update_new_arrivals($data){
		$this->db->where('new_arrivals_id', 1);
		$this->db->update('ci_new_arrivals', $data);
	}
	// end new_arrivals

	// banner_2
	function get_banner_2_single(){
		$this->db->where("banner_2_id", 1);
		$query = $this->db->get("ci_banner_2");
		return $query->row();	
	}
	
	function update_banner_2($data){
		$this->db->where('banner_2_id', 1);
		$this->db->update('ci_banner_2', $data);
	}
	// end banner_2

	// instagram
	function get_instagram_single(){
		$this->db->where("instagram_id", 1);
		$query = $this->db->get("ci_instagram");
		return $query->row();	
	}
	
	function update_instagram($data){
		$this->db->where('instagram_id', 1);
		$this->db->update('ci_instagram', $data);
	}
	// end instagram
	
	// instagram
	function get_text_single(){
		$this->db->where("text_id", 1);
		$query = $this->db->get("ci_text");
		return $query->row();	
	}
	
	function update_text($data){
		$this->db->where('text_id', 1);
		$this->db->update('ci_text', $data);
	}
	// end instagram
}