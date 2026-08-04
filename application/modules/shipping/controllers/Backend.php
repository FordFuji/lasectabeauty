<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('shipping/model_shipping');
		$this->load->model('shipping/model_shipping_thai_ems_datatable');
		$this->load->model('shipping/model_shipping_thai_normal_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/how_to_order/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// detail
	public function shipping_detail(){
		$data['row'] = $this->model_shipping->get_data_single();
		
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
		
		$this->load->view('shipping/shipping/form', $data);
	}
	
	public function shipping_detail_save_update($id = ''){	
		
		$this->form_validation->set_rules('shipping_detail', 'Detail(En)', "trim|required");
		$this->form_validation->set_rules('shipping_detail_ar', 'Detail(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'shipping_detail' => $this->input->post('shipping_detail'),
				'shipping_detail_ar' => $this->input->post('shipping_detail_ar'),
				'shipping_username_update' => $this->session->userdata('session_username'),
				'shipping_datetime_update' => date('Y-m-d H:i:s'),
				'shipping_ip_update' => $_SERVER['REMOTE_ADDR']
			);
				
			$this->model_shipping->update_data($data, $id);
			
			redirect('shipping/backend/shipping_detail');
		} else {
			$this->shipping_detail($id);
		}
	}
	// end detail
	
	// thai ems
	public function shipping_thai_ems() {
		if($this->input->post('submit') != '') {
			$ems_id = $this->input->post('ems_id');
			$ems_price = $this->input->post('ems_price');
			
			if(!empty($ems_id)) {
				$i = 0;
				foreach($ems_id as $r) {
					$data_update = array(
						'ems_price' => $ems_price[$i]
					);
					
					$where_update = array(
						'ems_id' => $r
					);
					
					$this->db->update('ci_rate_thai_shipping_ems', $data_update, $where_update);
					
					$i++;
				}
			}
		}
		
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
		$this->load->view('shipping/shipping_thai_ems/list', $data);
		/* end body */
	}
	
	public function shipping_thai_ems_server_processing() {
		$list = $this->model_shipping_thai_ems_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $shipping_thai_ems) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $shipping_thai_ems->ems_id;
            $row[] = '< '.$shipping_thai_ems->ems_weight;
            $row[] = '<input type="number" step="0.01" name="ems_price[]" value="'.$shipping_thai_ems->ems_price.'" class="form-control" style="width:150px;"><input type="hidden" name="ems_id[]" value="'.$shipping_thai_ems->ems_id.'">';
 			$row[] = '<a href="'.site_url('shipping_thai_ems/backend/form/'.$shipping_thai_ems->ems_id).'">Edit</a> / <a href="'.site_url('shipping_thai_ems/backend/delete/'.$shipping_thai_ems->ems_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_shipping_thai_ems_datatable->count_all(),
            "recordsFiltered" => $this->model_shipping_thai_ems_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	// end thai ems
	
	// thai normal
	public function shipping_thai() {
		if($this->input->post('submit') != '') {
			$thai_shipping_price = $this->input->post('thai_shipping_price');
			$thai_shipping_id = $this->input->post('thai_shipping_id');
			
			if(!empty($thai_shipping_id)) {
				$i = 0;
				foreach($thai_shipping_id as $id) {
					$data_where = array(
						'thai_shipping_price' => $thai_shipping_price[$i]
					);
					
					$update_where = array(
						'thai_shipping_id' => $id
					);	
					
					$this->db->update('ci_rate_thai_shipping', $data_where, $update_where);
						
					$i++;
				}
			}
		}
		
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
		$this->load->view('shipping/shipping_thai_normal/list', $data);
		/* end body */
	}
	
	public function shipping_thai_server_processing() {
		$list = $this->model_shipping_thai_normal_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $shipping_thai_normal) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $shipping_thai_normal->thai_shipping_id;
            $row[] = '< '.$shipping_thai_normal->thai_shipping_weight;
            $row[] = '<input type="number" step="0.01" name="thai_shipping_price[]" value="'.$shipping_thai_normal->thai_shipping_price.'" class="form-control" style="width: 150px;"><input type="hidden" name="thai_shipping_id[]" value="'.$shipping_thai_normal->thai_shipping_id.'">';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_shipping_thai_normal_datatable->count_all(),
            "recordsFiltered" => $this->model_shipping_thai_normal_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	// end thai normal end
	
	// dhl air
	public function shipping_dhl_air() {
		ini_set("memory_limit", "-1");
		
		$data['dhlAriCtrl'] = $this->model_shipping->getDhlAirResult();
		
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
		$this->load->view('shipping/shipping_dhl_air/list', $data);
		/* end body */
	}
	
	public function shipping_dhl_air_form($id = '') {	
		$data['row'] = $this->model_shipping->getShippingDhlAir($id);
		
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
		
		$this->load->view('shipping/shipping_dhl_air/form', $data);
	}
	
	public function shipping_dhl_air_save_update() {
		ini_set('max_execution_time', 6000);
		set_time_limit(6000);
			
		$shipping_dhl_air_price = $this->input->post('shipping_dhl_air_price');
		$shipping_dhl_air_id = $this->input->post('shipping_dhl_air_id');
		
		if(!empty($shipping_dhl_air_id)) {
			$i = 0;
			foreach($shipping_dhl_air_id as $r) {
				$data = array(
					'shipping_dhl_air_price' => $shipping_dhl_air_price[$i]
				);
				
				$where = array(
					'shipping_dhl_air_id' => $shipping_dhl_air_id[$i]
				);
				
				$this->db->update('ci_shipping_dhl_air', $data, $where);
				
				$i++;
			}	
		}
		
		redirect('shipping/backend/shipping_dhl_air');
	}
	// end dhl air
	
	// dhl express
	public function shipping_dhl_express() {
		ini_set("memory_limit", "-1");
		
		$data['dhlExpressCtrl'] = $this->model_shipping->getDhlExpressResult();
		
		$data['countryInZoneCtrl'] = $this->model_shipping->getCountry();
		
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
		$this->load->view('shipping/shipping_dhl_express/list', $data);
		/* end body */
	}
	
	public function shipping_dhl_express_form($id = '') {	
		$data['row'] = $this->model_shipping->getShippingDhlExpress($id);
		
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
		
		$this->load->view('shipping/shipping_dhl_express/form', $data);
	}
	
	public function shipping_dhl_express_save_update() {
		ini_set('max_execution_time', 6000);
		set_time_limit(6000);
			
		$shipping_dhl_express_price = $this->input->post('shipping_dhl_express_price');
		$shipping_dhl_express_id = $this->input->post('shipping_dhl_express_id');
		
		if(!empty($shipping_dhl_express_id)) {
			$i = 0;
			foreach($shipping_dhl_express_id as $r) {
				$data = array(
					'shipping_dhl_express_price' => $shipping_dhl_express_price[$i]
				);
				
				$where = array(
					'shipping_dhl_express_id' => $shipping_dhl_express_id[$i]
				);
				
				$this->db->update('ci_shipping_dhl_express', $data, $where);
				
				$i++;
			}	
		}
		
		redirect('shipping/backend/shipping_dhl_express');
	}
	// end dhl express
}
?>