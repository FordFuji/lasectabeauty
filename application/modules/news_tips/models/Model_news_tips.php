<?php
class Model_news_tips extends CI_Model {

	function __construct() {
		parent::__construct();
        $this->load->database();	
	}

	// news_tips_data	
	function insert_news_tips_data($data){
		$this->db->insert('ci_news_tips_data', $data); 
	}
	
	function get_news_tips_data_single($id){
		$this->db->where("news_tips_data_id", $id);
		$query = $this->db->get("ci_news_tips_data");
		return $query->row();	
	}
	
	function update_news_tips_data($data,$id){
		$this->db->where('news_tips_data_id', $id);
		$this->db->update('ci_news_tips_data', $data);
	}
	
	function delete_news_tips_data($val){
		$this->db->where_in('news_tips_data_id', $val);
		return $this->db->delete('ci_news_tips_data');
	}
	// end news_tips_data

}