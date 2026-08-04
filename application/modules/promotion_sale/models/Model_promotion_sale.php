<?php
class Model_promotion_sale extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	function get_data_single(){
		$this->db->where("promotion_sale_id", '1');
		$query = $this->db->get("ci_promotion_sale");
		return $query->row();	
	}
	
	function update_data($data){
		$this->db->where('promotion_sale_id', '1');
		$this->db->update('ci_promotion_sale', $data);
	}
	
}