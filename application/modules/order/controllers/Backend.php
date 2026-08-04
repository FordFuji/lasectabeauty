<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('order/model_order');
		$this->load->model('order/model_all_datatable');
		$this->load->model('order/model_new_datatable');
		$this->load->model('order/model_rejected_datatable');
		$this->load->model('order/model_pay_datatable');
		$this->load->model('order/model_accepted_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/all/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// all
	public function all() {
		
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
		$this->load->view('order/all/list', $data);
		/* end body */
	}
	
	public function all_server_processing() {
		$list = $this->model_all_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $all) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $all->order_detail_id;
            $row[] = $all->order_no;
            $row[] = $all->order_detail_payment_method;
            $row[] = $all->order_detail_shipping_method;
            $row[] = $all->order_detail_shipping_first_name_last_name;
            $row[] = $all->order_detail_shipping_phone_number;
            $row[] = $all->order_detail_total;
            $row[] = $all->order_detail_datetime_create;

            if($all->order_detail_status == 'Waiting') {
            	$row[] = 'Waiting payment';
            } elseif($all->order_detail_status == 'Shipping') {
            	$row[] = 'Waiting shipping';
            } elseif($all->order_detail_status == 'Success') {
            	$row[] = 'Accepted Orders';
            } elseif($all->order_detail_status == 'Cancel') {
            	$row[] = 'Reject Orders';
            } 

 			$row[] = '<a href="'.site_url('order/backend/all_form/'.$all->order_detail_id).'">View</a> / <a href="'.site_url('order/backend/all_delete/'.$all->order_detail_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_all_datatable->count_all(),
            "recordsFiltered" => $this->model_all_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function all_form($id = ''){	
		if($this->input->post('submit') != '') {
			$data_status = array(
				'order_detail_status' => $this->input->post('order_detail_status'),
				'order_detail_username_update' => $this->session->userdata('session_username'),
				'order_detail_datetime_update' => date('Y-m-d H:i:s'),
				'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
			);

			if($this->input->post('order_detail_tracking_no') != '') {
				$data_status['order_detail_tracking_no'] = $this->input->post('order_detail_tracking_no');
			}
			
			$where_status = array(
				'order_detail_id' => $id
			);
			
			$this->db->update('ci_order_detail', $data_status, $where_status);
			
			echo '<script>alert("Change Status Success");</script>';
		}

		$data['backCtrl'] = $this->model_order->getBackOrder($id);
		$data['nextCtrl'] = $this->model_order->getNextOrder($id);
	
		$data['id'] = $id;
		$data['row'] = $this->model_order->get_all_data_single($id);
		
		$data['order'] = $this->model_order->getOrderResult($id);
		
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
		
		$this->load->view('order/all/form', $data);
	}

	public function all_delete($order_detail_id) {
		$where = array(
			'order_detail_id' => $order_detail_id
		);

		$this->db->delete('ci_order_detail', $where);

		redirect('order/backend/all');
	}
	// end all
	
	// new
	public function new_() {
		
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
		$this->load->view('order/new/list', $data);
		/* end body */
	}
	
	public function new_server_processing() {
		$list = $this->model_new_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $new) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $new->order_detail_id;
            $row[] = $new->order_no;
            $row[] = $new->order_detail_payment_method;
            $row[] = $new->order_detail_shipping_method;
            $row[] = $new->order_detail_shipping_first_name_last_name;
            $row[] = $new->order_detail_shipping_phone_number;
            $row[] = $new->order_detail_total;
            $row[] = $new->order_detail_datetime_create;
 			$row[] = '<a href="'.site_url('order/backend/new_form/'.$new->order_detail_id).'">View</a> / <a href="'.site_url('order/backend/new_delete/'.$new->order_detail_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_new_datatable->count_all(),
            "recordsFiltered" => $this->model_new_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function new_form($id = ''){	
		if($this->input->post('submit') != '') {
			$data_status = array(
				'order_detail_status' => $this->input->post('order_detail_status'),
				'order_detail_username_update' => $this->session->userdata('session_username'),
				'order_detail_datetime_update' => date('Y-m-d H:i:s'),
				'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$where_status = array(
				'order_detail_id' => $id
			);
			
			$this->db->update('ci_order_detail', $data_status, $where_status);
			
			echo '<script>alert("Change Status Success");</script>';
		}
	
		$data['id'] = $id;
		$data['row'] = $this->model_order->get_new_data_single($id);
		
		$data['order'] = $this->model_order->getOrderResult($id);
		
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
		
		$this->load->view('order/new/form', $data);
	}

	public function new_delete($order_detail_id) {
		$where = array(
			'order_detail_id' => $order_detail_id
		);

		$this->db->delete('ci_order_detail', $where);

		redirect('order/backend/new_');
	}
	// end new
	
	// rejected
	public function rejected() {
		
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
		$this->load->view('order/rejected/list', $data);
		/* end body */
	}
	
	public function rejected_server_processing() {
		$list = $this->model_rejected_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rejected) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $rejected->order_detail_id;
            $row[] = $rejected->order_no;
            $row[] = $rejected->order_detail_payment_method;
            $row[] = $rejected->order_detail_shipping_method;
            $row[] = $rejected->order_detail_shipping_first_name_last_name;
            $row[] = $rejected->order_detail_shipping_phone_number;
            $row[] = $rejected->order_detail_total;
            $row[] = $rejected->order_detail_datetime_create;
 			$row[] = '<a href="'.site_url('order/backend/rejected_form/'.$rejected->order_detail_id).'">View</a> / <a href="'.site_url('order/backend/rejected_delete/'.$rejected->order_detail_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_rejected_datatable->count_all(),
            "recordsFiltered" => $this->model_rejected_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function rejected_form($id = ''){	
		if($this->input->post('submit') != '') {
			$data_status = array(
				'order_detail_status' => $this->input->post('order_detail_status'),
				'order_detail_username_update' => $this->session->userdata('session_username'),
				'order_detail_datetime_update' => date('Y-m-d H:i:s'),
				'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$where_status = array(
				'order_detail_id' => $id
			);
			
			$this->db->update('ci_order_detail', $data_status, $where_status);
			
			echo '<script>alert("Change Status Success");</script>';
		}
	
		$data['id'] = $id;
		$data['row'] = $this->model_order->get_rejected_data_single($id);
		
		$data['order'] = $this->model_order->getOrderResult($id);
		
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
		
		$this->load->view('order/rejected/form', $data);
	}

	public function rejected_delete($order_detail_id) {
		$where = array(
			'order_detail_id' => $order_detail_id
		);

		$this->db->delete('ci_order_detail', $where);

		redirect('order/backend/rejected');
	}
	// end rejected
	
	// accepted
	public function accepted() {
		
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
		$this->load->view('order/accepted/list', $data);
		/* end body */
	}
	
	public function accepted_server_processing() {
		$list = $this->model_accepted_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $accepted) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $accepted->order_detail_id;
            $row[] = $accepted->order_no;
            $row[] = $accepted->order_detail_payment_method;
            $row[] = $accepted->order_detail_shipping_method;
            $row[] = $accepted->order_detail_shipping_first_name_last_name;
            $row[] = $accepted->order_detail_shipping_phone_number;
            $row[] = $accepted->order_detail_total;
            $row[] = $accepted->order_detail_datetime_create;
 			$row[] = '<a href="'.site_url('order/backend/accepted_form/'.$accepted->order_detail_id).'">View</a> / <a href="'.site_url('order/backend/accepted_delete/'.$accepted->order_detail_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_accepted_datatable->count_all(),
            "recordsFiltered" => $this->model_accepted_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function accepted_form($id = ''){	
		if($this->input->post('submit') != '') {
			$data_status = array(
				'order_detail_status' => $this->input->post('order_detail_status'),
				'order_detail_username_update' => $this->session->userdata('session_username'),
				'order_detail_datetime_update' => date('Y-m-d H:i:s'),
				'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$where_status = array(
				'order_detail_id' => $id
			);
			
			$this->db->update('ci_order_detail', $data_status, $where_status);
			
			echo '<script>alert("Change Status Success");</script>';
		}
	
		$data['id'] = $id;
		$data['row'] = $this->model_order->get_accepted_data_single($id);
		
		$data['order'] = $this->model_order->getOrderResult($id);
		
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
		
		$this->load->view('order/accepted/form', $data);
	}

	public function accepted_delete($order_detail_id) {
		$where = array(
			'order_detail_id' => $order_detail_id
		);

		$this->db->delete('ci_order_detail', $where);

		redirect('order/backend/accepted');
	}
	// end accepted
	
	// pay
	public function pay() {
		
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
		$this->load->view('order/pay/list', $data);
		/* end body */
	}
	
	public function pay_server_processing() {
		$list = $this->model_pay_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pay) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $pay->order_detail_id;
            $row[] = $pay->order_no;
            $row[] = $pay->order_detail_payment_method;
            $row[] = $pay->order_detail_shipping_method;
            $row[] = $pay->order_detail_shipping_first_name_last_name;
            $row[] = $pay->order_detail_shipping_phone_number;
            $row[] = $pay->order_detail_total;
            $row[] = $pay->order_detail_datetime_create;
 			$row[] = '<a href="'.site_url('order/backend/pay_form/'.$pay->order_detail_id).'">View</a> / <a href="'.site_url('order/backend/pay_delete/'.$pay->order_detail_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_pay_datatable->count_all(),
            "recordsFiltered" => $this->model_pay_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function pay_form($id = ''){	
		if($this->input->post('submit') != '') {
			$data_status = array(
				'order_detail_status' => $this->input->post('order_detail_status'),
				'order_detail_username_update' => $this->session->userdata('session_username'),
				'order_detail_datetime_update' => date('Y-m-d H:i:s'),
				'order_detail_ip_update' => $_SERVER['REMOTE_ADDR']
			);

			if($this->input->post('order_detail_tracking_no') != '') {
				$data_status['order_detail_tracking_no'] = $this->input->post('order_detail_tracking_no');
			}
			
			$where_status = array(
				'order_detail_id' => $id
			);
			
			$this->db->update('ci_order_detail', $data_status, $where_status);
			
			echo '<script>alert("Change Status Success");</script>';
		}
	
		$data['id'] = $id;
		$data['row'] = $this->model_order->get_pay_data_single($id);
		
		$data['order'] = $this->model_order->getOrderResult($id);
		
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
		
		$this->load->view('order/pay/form', $data);
	}

	public function pay_delete($order_detail_id) {
		$where = array(
			'order_detail_id' => $order_detail_id
		);

		$this->db->delete('ci_order_detail', $where);

		redirect('order/backend/pay');
	}
	// end pay

	public function printOrder($order_detail_id) {
		$row = $this->model_order->get_all_data_single($order_detail_id);
		
		$order = $this->model_order->getOrderResult($order_detail_id);
?>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="<?php echo base_url('asset/backend/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css');?>" rel="stylesheet');?>" />
		<link href="<?php echo base_url('asset/backend/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('asset/backend/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('asset/backend/css/animate.min.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('asset/backend/css/style.min.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('asset/backend/css/style-responsive.min.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('asset/backend/css/theme/default.css');?>" rel="stylesheet" id="theme" />
		<!-- ================== END BASE CSS STYLE ================== -->
		
		<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
		<link href="<?php echo base_url('asset/backend/plugins/DataTables/css/data-table.css');?>" rel="stylesheet" />
		<!-- ================== END PAGE LEVEL STYLE ================== -->
		
		<!-- ================== BEGIN BASE JS ================== -->
		<script src="<?php echo base_url('asset/backend/plugins/pace/pace.min.js');?>"></script>

		<style>
			body {
				background-color: #fff;
			}

			table {
				font-size: 10px;
			}
		</style>

		<div class="panel-body">                    
	        <legend>Shipping</legend>
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Name</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_shipping_first_name_last_name;?>
	            </div>
	        </div>
	        <br>
	        <br>
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Phone Number</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_shipping_phone_number;?>
	            </div>
	        </div>
	        <br>  
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Email</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_shipping_email;?>
	            </div>
	        </div>
	        <br>  
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Address</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_shipping_address.'<br>'.$row->order_detail_shipping_district.' '.$row->order_detail_shipping_province.' '.$row->order_detail_shipping_country.' '.$row->order_detail_shipping_country.' '.$row->order_detail_shipping_postal_code;?>
	            </div>
	        </div>
	        <br>  
	        <legend>Billing</legend>
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Name</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_billing_first_name_last_name;?>
	            </div>
	        </div>
	        <br>
	        <br>
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Phone Number</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_billing_phone_number;?>
	            </div>
	        </div>
	        <br>  
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Email</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_billing_email;?>
	            </div>
	        </div>
	        <br>  
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Address</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row)) echo $row->order_detail_billing_address.'<br>'.$row->order_detail_billing_district.' '.$row->order_detail_billing_province.' '.$row->order_detail_billing_country.' '.$row->order_detail_billing_country.' '.$row->order_detail_billing_postal_code;?>
	            </div>
	        </div>
	        <br>
	        <legend>Status</legend>
	        <div class="form-group">
	            <label class="col-md-3 control-label" align="right">Status</label>
	            <div class="col-md-9">
	   				<?php if(!empty($row) and $row->order_detail_status == 'Waiting') echo 'Waiting payment';?>
	   				<?php if(!empty($row) and $row->order_detail_status == 'Shipping') echo 'Waiting shipping';?>
	   				<?php if(!empty($row) and $row->order_detail_status == 'Success') echo 'Accepted Orders';?>
	   				<?php if(!empty($row) and $row->order_detail_status == 'Cancel') echo 'Reject Orders';?>
	   				<br>
	   				<br>
	   			</div>
	        </div>
	        <br>
	        <legend>Order</legend>
	        <div class="form-group">
	            <div class="col-md-12">
					<table class="table table-striped table-bordered">
						<tr>
							<th>Image</th>
							<th>Category</th>
							<th>Name</th>
							<th>Color</th>
							<th>Qty</th>
							<th>Price</th>
							<th>Sub Total</th>
						</tr>
<?php
		if(!empty($order)) {
			foreach($order as $r) {
				$price = $r->order_price * $r->order_qty;
?>
						<tr>
							<td><img src="<?php echo base_url('uploads/product/'.$r->order_image);?>" width="150"></td>
							<td><?php echo $r->order_category;?></td>
							<td><?php echo $r->order_name;?></td>
							<td><?php echo $r->order_color;?></td>
							<td><?php echo number_format($r->order_qty, 0, '.', ',');?></td>
							<td><?php echo number_format($r->order_price, 2, '.', ',');?></td>
							<td><?php echo number_format($price, 2, '.', ',');?></td>
						</tr>
<?php
			}
		}
?>
						<tr>
							<td colspan="6">Sub Total</td>
							<td><?php if(!empty($row)) echo number_format($row->order_detail_sub_total, 2, '.', ',');?></td>
						</tr>
						<tr>
							<td colspan="6">Discount</td>
							<td><?php if(!empty($row)) echo number_format($row->order_detail_discount, 2, '.', ',');?></td>
						</tr>
						<tr>
							<td colspan="6">Shipping</td>
							<td><?php if(!empty($row)) echo number_format($row->order_detail_shipping, 2, '.', ',');?></td>
						</tr>
						<tr>
							<td colspan="6">Total</td>
							<td><?php if(!empty($row)) echo number_format($row->order_detail_total, 2, '.', ',');?></td>
						</tr>
					</table>
	            </div>
	        </div>
	        <br>                 
        </div>
<?php
	}
}
?>