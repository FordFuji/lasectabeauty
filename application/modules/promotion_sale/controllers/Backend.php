<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('promotion_sale/model_promotion_sale');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/promotion_sale/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	public function index(){
		$data['row'] = $this->model_promotion_sale->get_data_single();
		
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
		
		$this->load->view('promotion_sale/promotion_sale/form', $data);
	}
	
	public function save_update($id = ''){	
		
		$this->form_validation->set_rules('promotion_sale_discount', 'Promotion Sale', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'promotion_sale_discount' => $this->input->post('promotion_sale_discount'),
				'promotion_sale_username_update' => $this->session->userdata('session_username'),
				'promotion_sale_datetime_update' => date('Y-m-d H:i:s'),
				'promotion_sale_ip_update' => $_SERVER['REMOTE_ADDR']
			);
				
			$this->model_promotion_sale->update_data($data, $id);
			
			$query = $this->db->get('ci_product');
			$rows = $query->result();

			if(!empty($rows)) {
				foreach($rows as $r) {
					$data = array(
						'product_price' => $r->product_before_discount_price - ($r->product_before_discount_price * $this->input->post('promotion_sale_discount') / 100)
					);

					$where = array(
						'product_id' => $r->product_id
					);

					$this->db->update('ci_product', $data, $where);
				}
			}

			redirect('promotion_sale/backend/index');
		} else {
			$this->index($id);
		}
	}
}
?>