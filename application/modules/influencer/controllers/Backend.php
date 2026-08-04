<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('influencer/model_influencer');
		$this->load->model('influencer/model_influencer_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/influencer/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// influencer	
	public function influencer() {
		
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
		$this->load->view('influencer/influencer/list', $data);
		/* end body */
	}
	
	public function influencer_server_processing() {
		$list = $this->model_influencer_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $influencer) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $influencer->influencer_id;
			
            $row[] = $influencer->influencer_code;
            $row[] = $influencer->influencer_type;
            $row[] = $influencer->influencer_price;
            $row[] = $influencer->influencer_start_date;
            $row[] = $influencer->influencer_end_date;
            
			$row[] = '<a href="'.site_url('influencer/backend/influencer_form/'.$influencer->influencer_id).'">Edit</a> / <a href="'.site_url('influencer/backend/influencer_delete/'.$influencer->influencer_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_influencer_datatable->count_all(),
            "recordsFiltered" => $this->model_influencer_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function influencer_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_influencer->get_influencer_single($id);
		
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
		
		$this->load->view('influencer/influencer/form', $data);
	}
	
	public function influencer_save_update($id = ''){	
		
		$this->form_validation->set_rules('influencer_name', 'Name', "trim|required");
		$this->form_validation->set_rules('influencer_surname', 'Surname', "trim|required");
		$this->form_validation->set_rules('influencer_address', 'Address', "trim|required");
		$this->form_validation->set_rules('influencer_code', 'Code', "trim|required");
		$this->form_validation->set_rules('influencer_type', 'Type', "trim|required");
		$this->form_validation->set_rules('influencer_price', 'Price', "trim|required");
		$this->form_validation->set_rules('influencer_start_date', 'Start Date', "trim|required");
		$this->form_validation->set_rules('influencer_end_date', 'End Date', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'influencer_name' => $this->input->post('influencer_name'),
				'influencer_surname' =>  $this->input->post('influencer_surname'),
				'influencer_address' =>  $this->input->post('influencer_address'),
				'influencer_code' =>  $this->input->post('influencer_code'),
				'influencer_type' =>  $this->input->post('influencer_type'),
				'influencer_price' =>  $this->input->post('influencer_price'),
				'influencer_start_date' =>  $this->input->post('influencer_start_date'),
				'influencer_end_date' =>  $this->input->post('influencer_end_date'),
				'influencer_username_update' => $this->session->userdata('session_username'),
				'influencer_datetime_update' => date('Y-m-d H:i:s'),
				'influencer_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			// update 
			if($id != '') {	
				$this->model_influencer->update_influencer($data, $id);
				
				redirect('influencer/backend/influencer', 'location');
				
			// insert
			} else {	
				$data['influencer_username_create'] = $this->session->userdata('session_username');
				$data['influencer_datetime_create'] = date('Y-m-d H:i:s');
				$data['influencer_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_influencer->insert_influencer($data);
				
				redirect('influencer/backend/influencer', 'location');
			}
		} else {
			$this->influencer_form($id);
		}
	}
	
	public function influencer_delete($id){
		$this->model_influencer->delete_influencer($id);

		redirect('influencer/backend/influencer','location');
	}
	// end influencer 
	
	
}
?>