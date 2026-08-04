<?php
class Model_member extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	function get_data_list(){		
		$this->db->order_by("member_id","asc");
		$query = $this->db->get("ci_member");
			
		return $query->result();
	}
	
	function insert_data($data){
		$this->db->insert('ci_member', $data); 
	}
	
	function get_data_single($id){
		$this->db->where("ci_member.member_id", $id);
		$query = $this->db->get("ci_member");
		return $query->row();	
	}
	
	function update_data($data,$id){
		$this->db->where('member_id', $id);
		$this->db->update('ci_member', $data);
	}
	
	function delete_data($val){
		$this->db->where_in('member_id', $val);
		return $this->db->delete('ci_member');
	}
	
	function getMemberBillingResult($member_id) {
		$this->db->where('member_id', $member_id);
		$this->db->order_by('member_billing_address_id', 'asc');
		$query = $this->db->get('ci_member_billing_address');
		
		return $query->result();
	}
	
	function getMemberShippingResult($member_id) {
		$this->db->where('member_id', $member_id);
		$this->db->order_by('member_shipping_address_id', 'asc');
		$query = $this->db->get('ci_member_shipping_address');
		
		return $query->result();
	}
	
	function getProvinceName($province_id) {
		$this->db->where('PROVINCE_ID', $province_id);
		$query = $this->db->get('provinces');
		
		return $query->row()->PROVINCE_NAME_ENG;
	}
	
	function getAmphurName($amphur_id) {
		$this->db->where('AMPHUR_ID', $amphur_id);
		$query = $this->db->get('amphures');
		
		return $query->row()->AMPHUR_NAME_ENG;
	}
	
	function getDistrictName($district_id) {
		$this->db->where('DISTRICT_ID', $district_id);
		$query = $this->db->get('districts');
		
		return $query->row()->DISTRICT_NAME_ENG;
	}
}