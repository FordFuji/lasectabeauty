<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('how_to_order/model_how_to_order');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/how_to_order/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	public function index(){
		$data['row'] = $this->model_how_to_order->get_data_single();
		
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
		
		$this->load->view('how_to_order/how_to_order/form', $data);
	}
	
	public function save_update($id = ''){	
		
		$this->form_validation->set_rules('how_to_order_detail', 'Detail(En)', "trim|required");
		$this->form_validation->set_rules('how_to_order_detail_ar', 'Detail(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'how_to_order_detail' => $this->input->post('how_to_order_detail'),
				'how_to_order_detail_ar' => $this->input->post('how_to_order_detail_ar'),
				'how_to_order_username_update' => $this->session->userdata('session_username'),
				'how_to_order_datetime_update' => date('Y-m-d H:i:s'),
				'how_to_order_ip_update' => $_SERVER['REMOTE_ADDR']
			);
				
			$this->model_how_to_order->update_data($data, $id);
			
			redirect('how_to_order/backend/index');
		} else {
			$this->index($id);
		}
	}
}
?>