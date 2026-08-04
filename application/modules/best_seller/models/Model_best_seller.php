<?php
class Model_best_seller extends CI_Model {

	function __construct() {
		parent::__construct();
        $this->load->database();	
	}

	// best_seller
	
	function update_best_seller($data){
		$this->db->where('best_seller_id', 1);
		$this->db->update('ci_best_seller', $data);
	}
	
	function get_best_seller_single() {
		$this->db->where('best_seller_id', 1);
		$query = $this->db->get('ci_best_seller');

		return $query->row();
	}

	function getProductResult() {
		$this->db->order_by('product_name', 'asc');
		$query = $this->db->get('ci_product');

		return $query->result();
	}

	function getProductBestSeller($id) {
		$product_id = 'product_id'.$id;

		$this->db->where($product_id, $id);
		$query = $this->db->get('ci_best_seller');

		return $query->row();
	}

	function getBestSellerRecord() {
		$this->db->where('best_seller_id', 1);
		$query = $this->db->get('ci_best_seller');

		return $query->row();
	}
	// end best_seller

}