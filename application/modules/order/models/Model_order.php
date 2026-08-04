<?php
class Model_order extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// all
	function get_all_data_list(){		
		$this->db->order_by("order_id","asc");
		$query = $this->db->get("ci_order");
			
		return $query->result();
	}
	
	function get_all_data_single($id){
		$this->db->where("ci_order_detail.order_detail_id", $id);
		$query = $this->db->get("ci_order_detail");
		return $query->row();	
	}
	
	function update_all_data($data,$id){
		$this->db->where('order_id', $id);
		$this->db->update('ci_order', $data);
	}
	// end all
	
	// new
	function get_new_data_list(){		
		$this->db->order_by("order_id","asc");
		$query = $this->db->get("ci_order");
			
		return $query->result();
	}
	
	function get_new_data_single($id){
		$this->db->where("ci_order_detail.order_detail_id", $id);
		$query = $this->db->get("ci_order_detail");
		return $query->row();	
	}
	
	function update_new_data($data,$id){
		$this->db->where('order_id', $id);
		$this->db->update('ci_order', $data);
	}
	// end new
	
	// rejected
	function get_rejected_data_list(){		
		$this->db->order_by("order_id","asc");
		$query = $this->db->get("ci_order");
			
		return $query->result();
	}
	
	function get_rejected_data_single($id){
		$this->db->where("ci_order_detail.order_detail_id", $id);
		$query = $this->db->get("ci_order_detail");
		return $query->row();	
	}
	
	function update_rejected_data($data,$id){
		$this->db->where('order_id', $id);
		$this->db->update('ci_order', $data);
	}
	// end rejected
	
	// accepted
	function get_accepted_data_list(){		
		$this->db->order_by("order_id","asc");
		$query = $this->db->get("ci_order");
			
		return $query->result();
	}
	
	function get_accepted_data_single($id){
		$this->db->where("ci_order_detail.order_detail_id", $id);
		$query = $this->db->get("ci_order_detail");
		return $query->row();	
	}
	
	function update_accepted_data($data,$id){
		$this->db->where('order_id', $id);
		$this->db->update('ci_order', $data);
	}
	// end accepted
	
	// pay
	function get_pay_data_list(){		
		$this->db->order_by("order_id","asc");
		$query = $this->db->get("ci_order");
			
		return $query->result();
	}
	
	function get_pay_data_single($id){
		$this->db->where("ci_order_detail.order_detail_id", $id);
		$query = $this->db->get("ci_order_detail");
		return $query->row();	
	}
	
	function update_pay_data($data,$id){
		$this->db->where('order_id', $id);
		$this->db->update('ci_order', $data);
	}
	// end pay
	
	function getOrderResult($order_detail_id) {
		$this->db->where('order_detail_id', $order_detail_id);
		$this->db->order_by('order_id', 'asc');
		$query = $this->db->get('ci_order');
		
		return $query->result();
	}

	public function getBackOrder($order_detail_id) {
		$this->db->order_by('order_detail_id', 'desc');
		$this->db->where('order_detail_id <', $order_detail_id);
		$this->db->limit(1);
		$query = $this->db->get('ci_order_detail');

		return $query->row();
	}

	public function getNextOrder($order_detail_id) {
		$this->db->order_by('order_detail_id', 'asc');
		$this->db->where('order_detail_id >', $order_detail_id);
		$this->db->limit(1);
		$query = $this->db->get('ci_order_detail');

		return $query->row();
	}
}