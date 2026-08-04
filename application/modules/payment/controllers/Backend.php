<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('payment/model_payment_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/payment/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	public function index() {
		
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
		$this->load->view('payment/payment/list', $data);
		/* end body */
	}
	
	public function server_processing() {
		$list = $this->model_payment_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $payment) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $payment->payment_confirm_id;
            $row[] = $payment->order_no;
            $row[] = $payment->payment_confirm_amount;
            $row[] = $payment->payment_confirm_datetime;
            $row[] = '<a href="'.base_url('uploads/slip/'.$payment->payment_confirm_slip).'" target="_blank"><img src="'.base_url('uploads/slip/'.$payment->payment_confirm_slip).'" width="150"></a>';
            $row[] = $payment->payment_confirm_datetime_create;
			$row[] = $payment->payment_confirm_ip_create;
			$row[] = '<a href="'.site_url('payment/backend/payment_delete/'.$payment->payment_confirm_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>'; 
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_payment_datatable->count_all(),
            "recordsFiltered" => $this->model_payment_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}

	public function payment_delete($payment_confirm_id) {
		$where = array(
			'payment_confirm_id' => $payment_confirm_id
		);

		$this->db->delete('ci_payment_confirm', $where);

		redirect('payment/backend');
	}
}
?>