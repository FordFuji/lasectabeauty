<?php
class Model_dashboard extends CI_Model {
	
	function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	function get_data_single(){
		$this->db->where("counter_id", '1');
		$query = $this->db->get("ci_counter");
		return $query->row();	
	}	
	
	function getCountMember() {
		$query = $this->db->get('ci_member');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
	
	function getCountProduct() {
		$query = $this->db->get('ci_product');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
	
	function getCountOrderDetail() {
		$query = $this->db->get('ci_order_detail');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
	
	function getCountContact() {
		$query = $this->db->get('ci_contact');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
	
	function getCountOrderWaiting() {
		$this->db->where('order_detail_status', 'Waiting');
		$query = $this->db->get('ci_order_detail');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
	
	function getOrderSaleTotal() {
		$this->db->select('sum(order_detail_total) as total');
		$query = $this->db->get('ci_order_detail');
		
		$row = $query->row();
		
		if(!empty($row)) {
			return $row->total;
		} else {
			return 0;
		}
	}
	
	function getOrderSaleSuccess() {
		$this->db->select('sum(order_detail_total) as total');
		$this->db->where('order_detail_status !=', 'Waiting');
		$query = $this->db->get('ci_order_detail');
		
		$row = $query->row();
		
		if(!empty($row)) {
			return $row->total;
		} else {
			return 0;
		}
	}
	
	function getOrderSaleWaiting() {
		$this->db->select('sum(order_detail_total) as total');
		$this->db->where('order_detail_status', 'Waiting');
		$query = $this->db->get('ci_order_detail');
		
		$row = $query->row();
		
		if(!empty($row)) {
			return $row->total;
		} else {
			return 0;
		}
	}
	
	function getCounter($category_id) {
		if($category_id == 1) {
			$this->db->where('counter_make_up_datetime !=', '0000-00-00 00:00:00');
		} elseif($category_id == 2) {
			$this->db->where('counter_skin_care_datetime !=', '0000-00-00 00:00:00');
		} elseif($category_id == 3) {
			$this->db->where('counter_hair_care_datetime !=', '0000-00-00 00:00:00');
		} elseif($category_id == 4) {
			$this->db->where('counter_accessory_datetime !=', '0000-00-00 00:00:00');
		}
		
		$query = $this->db->get('ci_counter');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
	
	function getCounterVisit($type) {
		if($type == 'day') {
			$this->db->where('counter_make_up_datetime like "'.date('Y-m-d').'%" or counter_skin_care_datetime like "'.date('Y-m-d').'%" or counter_hair_care_datetime like "'.date('Y-m-d').'%" or counter_accessory_datetime like "'.date('Y-m-d').'%"');
		} elseif($type == 'week') {
			$firstday = date('Y-m-d', strtotime("this week")); 
			$this->db->where('(counter_make_up_datetime >= "'.$firstday.' 00:00:00" and counter_make_up_datetime <= "'.date('Y-m-d H:i:s').'") or (counter_skin_care_datetime >= "'.$firstday.' 00:00:00" and counter_skin_care_datetime <= "'.date('Y-m-d H:i:s').'") or (counter_hair_care_datetime >= "'.$firstday.' 00:00:00" and counter_hair_care_datetime <= "'.date('Y-m-d H:i:s').'") or (counter_accessory_datetime >= "'.$firstday.' 00:00:00" and counter_accessory_datetime <= "'.date('Y-m-d H:i:s').'")');
		} elseif($type == 'month') {
			$this->db->where('counter_make_up_datetime like "'.date('Y-m').'%" or counter_skin_care_datetime like "'.date('Y-m').'%" or counter_hair_care_datetime like "'.date('Y-m').'%" or counter_accessory_datetime like "'.date('Y-m').'%"');
		}
		
		$query = $this->db->get('ci_counter');
		
		$rows = $query->result();
		
		if(!empty($rows)) {
			return count($rows);
		} else {
			return 0;
		}
	}
}