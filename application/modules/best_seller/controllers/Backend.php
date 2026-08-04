<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('best_seller/model_best_seller');
		$this->load->model('best_seller/model_best_seller_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/best_seller/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// best_seller	
	public function best_seller_product() {
		
		$data['rows'] = $this->model_best_seller->getProductResult();

		$data['row'] = $this->model_best_seller->getBestSellerRecord();

		/* start header, menu */
		$data['title'] = $this->model_template_main->get_title_menu();
		$data['active'] = $this->model_template_main->get_active_menu();
		$data['sub_menu_active'] = $this->model_template_main->get_active_sub_menu();
		$data['row_user'] = $this->model_template_main->get_user_single();
		$data['department'] = $this->model_template_main->get_department_single();
		$data['rows_menu'] = $this->model_template_main->get_menu_list();
		$data['rows_sub_menu'] = $this->model_template_main->get_sub_menu_list();
		
		$this->load->view('template_main/template_main/header', $data);
		$this->load->view('template_main/template_main/menu_sidebar', $data);
		/* end header, menu */
		
		/* start body */
		$this->load->view('best_seller/best_seller_product/form', $data);
		/* end body */
	}
	
	public function best_seller_save_update($id = ''){	
		
		$this->form_validation->set_rules('product_id1', 'Product 1', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'product_id1' => $this->input->post('product_id1'),
				'product_id2' =>  $this->input->post('product_id2'),
				'product_id3' =>  $this->input->post('product_id3'),
				'product_id4' =>  $this->input->post('product_id4'),
				'product_id5' =>  $this->input->post('product_id5'),
				'product_id6' =>  $this->input->post('product_id6'),
				'product_id7' =>  $this->input->post('product_id7'),
				'product_id8' =>  $this->input->post('product_id8'),
				'product_id9' =>  $this->input->post('product_id9'),
				'product_id10' =>  $this->input->post('product_id10'),
				'best_seller_username_update' => $this->session->userdata('session_username'),
				'best_seller_datetime_update' => date('Y-m-d H:i:s'),
				'best_seller_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			
			$this->model_best_seller->update_best_seller($data);
				
			redirect('best_seller/backend/best_seller_product', 'location');
		} else {
			$this->best_seller_product($id);
		}
	}
	// end best_seller 
	
}
?>