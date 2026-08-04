<?php
class Model_how_to_order extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	function get_data_single(){
		$this->db->where("how_to_order_id", '1');
		$query = $this->db->get("ci_how_to_order");
		return $query->row();	
	}
	
	function update_data($data){
		$this->db->where('how_to_order_id', '1');
		$this->db->update('ci_how_to_order', $data);
	}
	
}