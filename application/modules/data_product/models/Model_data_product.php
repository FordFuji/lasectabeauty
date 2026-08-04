<?php
class Model_data_product extends CI_Model {

	function __construct() {
		parent::__construct();
        $this->load->database();	
	}

	// color	
	function insert_color($data){
		$this->db->insert('ci_color', $data); 
	}
	
	function get_color_single($id){
		$this->db->where("color_id", $id);
		$query = $this->db->get("ci_color");
		return $query->row();	
	}
	
	function update_color($data,$id){
		$this->db->where('color_id', $id);
		$this->db->update('ci_color', $data);
	}
	
	function delete_color($val){
		$this->db->where_in('color_id', $val);
		return $this->db->delete('ci_color');
	}
	// end color

	// category	
	function insert_category($data){
		$this->db->insert('ci_category', $data); 
	}
	
	function get_category_single($id){
		$this->db->where("category_id", $id);
		$query = $this->db->get("ci_category");
		return $query->row();	
	}
	
	function update_category($data,$id){
		$this->db->where('category_id', $id);
		$this->db->update('ci_category', $data);
	}
	
	function delete_category($val){
		$this->db->where_in('category_id', $val);
		return $this->db->delete('ci_category');
	}
	// end category

	// sub_category	
	function insert_sub_category($data){
		$this->db->insert('ci_sub_category', $data); 
	}
	
	function get_sub_category_single($id){
		$this->db->where("sub_category_id", $id);
		$query = $this->db->get("ci_sub_category");
		return $query->row();	
	}
	
	function update_sub_category($data,$id){
		$this->db->where('sub_category_id', $id);
		$this->db->update('ci_sub_category', $data);
	}
	
	function delete_sub_category($val){
		$this->db->where_in('sub_category_id', $val);
		return $this->db->delete('ci_sub_category');
	}
	
	function getCategoryResult() {
		$this->db->order_by('category_id', 'asc');
		$query = $this->db->get('ci_category');
		
		return $query->result();
	}
	// end sub_category
	
	// product	
	function insert_product($data){
		$this->db->insert('ci_product', $data); 
	}
	
	function get_product_single($id){
		$this->db->where("product_id", $id);
		$query = $this->db->get("ci_product");
		return $query->row();	
	}
	
	function update_product($data,$id){
		$this->db->where('product_id', $id);
		$this->db->update('ci_product', $data);
	}
	
	function delete_product($val){
		$this->db->where_in('product_id', $val);
		return $this->db->delete('ci_product');
	}
	
	function getSubCategoryResult() {
		$this->db->order_by('ci_sub_category.sub_category_id', 'asc');
		$this->db->join('ci_category', 'ci_sub_category.category_id = ci_category.category_id', 'inner');
		$query = $this->db->get('ci_sub_category');
		
		return $query->result();
	}
	
	function getProductGalleryResult($stock_id) {
		$this->db->where('stock_id', $stock_id);
		$this->db->order_by('product_gallery_id', 'asc');
		$query = $this->db->get('ci_product_gallery');
		
		return $query->result();
	}
	// product	
	
	// stock	
	function insert_stock($data){
		$this->db->insert('ci_stock', $data); 
	}
	
	function get_stock_single($id){
		$this->db->where("stock_id", $id);
		$query = $this->db->get("ci_stock");
		return $query->row();	
	}
	
	function update_stock($data,$id){
		$this->db->where('stock_id', $id);
		$this->db->update('ci_stock', $data);
	}
	
	function delete_stock($val){
		$this->db->where_in('stock_id', $val);
		return $this->db->delete('ci_stock');
	}
	
	function getProductResult() {
		$this->db->order_by('product_name', 'asc');
		$query = $this->db->get('ci_product');
		
		return $query->result();
	}
	
	function getColorResult() {
		$this->db->order_by('color_id', 'asc');
		$query = $this->db->get('ci_color');
		
		return $query->result();
	}
	
	function getStockIdLasted() {
		$this->db->order_by('ci_stock.stock_id', 'desc');
		$this->db->limit(1);
		
		$query = $this->db->get('ci_stock');
		
		return $query->row()->stock_id;
	}
	// end stock
}