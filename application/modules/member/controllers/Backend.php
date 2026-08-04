<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('member/model_member');
		$this->load->model('member/model_member_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/member/';
		
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
		$this->load->view('member/member/list', $data);
		/* end body */
	}
	
	public function server_processing() {
		$list = $this->model_member_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $member) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $member->member_id;
            $row[] = $member->member_first_name.' '.$member->member_last_name;
            $row[] = $member->member_phone_number;
            $row[] = $member->member_email;
            $row[] = $member->member_password;
            $row[] = $member->member_gender;
            $row[] = $member->member_datetime_create;
 			$row[] = '<a href="'.site_url('member/backend/form/'.$member->member_id).'">View</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_member_datatable->count_all(),
            "recordsFiltered" => $this->model_member_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_member->get_data_single($id);
		
		$data['billingCtrl'] = $this->model_member->getMemberBillingResult($id);
		$data['shippingCtrl'] = $this->model_member->getMemberShippingResult($id);
		
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
		
		$this->load->view('member/member/form', $data);
	}
}
?>