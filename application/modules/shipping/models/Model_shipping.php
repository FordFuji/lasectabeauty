<?php
class Model_shipping extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	function get_data_single(){
		$this->db->where("shipping_id", '1');
		$query = $this->db->get("ci_shipping");
		return $query->row();	
	}
	
	function update_data($data){
		$this->db->where('shipping_id', '1');
		$this->db->update('ci_shipping', $data);
	}
	
	function getDhlAirResult() {
		$this->db->order_by('ci_shipping_dhl_air.shipping_dhl_air_id', 'asc');
		$this->db->join('country', 'ci_shipping_dhl_air.country_id = country.country_id', 'inner');
		$this->db->group_by('ci_shipping_dhl_air.country_id');
		$query = $this->db->get('ci_shipping_dhl_air');
		
		return $query->result();
	}
	
	function getShippingDhlAir($country_id) {
		$this->db->order_by('ci_shipping_dhl_air.shipping_dhl_air_id', 'asc');
		$this->db->where('ci_shipping_dhl_air.country_id', $country_id);
		$this->db->join('country', 'ci_shipping_dhl_air.country_id = country.country_id', 'inner');
		$query = $this->db->get('ci_shipping_dhl_air');
		
		return $query->result();
	}
	
	function getDhlExpressResult() {
		$this->db->order_by('ci_shipping_dhl_express.shipping_dhl_express_id', 'asc');
		$this->db->join('zone', 'ci_shipping_dhl_express.zone_name = zone.zone_name', 'inner');
		$this->db->group_by('ci_shipping_dhl_express.zone_name');
		$query = $this->db->get('ci_shipping_dhl_express');
		
		return $query->result();
	}
	
	function getShippingDhlExpress($zone_name) {
		$this->db->order_by('ci_shipping_dhl_express.shipping_dhl_express_id', 'asc');
		$this->db->where('ci_shipping_dhl_express.zone_name', $zone_name);
		$query = $this->db->get('ci_shipping_dhl_express');
		
		return $query->result();
	}
	
	function getCountry() {
		$this->db->order_by('country_id', 'asc');
		$query = $this->db->get('country');
		
		return $query->result();
	}
}