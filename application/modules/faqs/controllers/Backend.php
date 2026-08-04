<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('faqs/model_faqs');
		$this->load->model('faqs/model_faqs_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/faqs/';
		
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
		$this->load->view('faqs/faqs/list', $data);
		/* end body */
	}
	
	public function server_processing() {
		$list = $this->model_faqs_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $faqs) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $faqs->faqs_id;
            $row[] = $faqs->faqs_question;
            $row[] = $faqs->faqs_answer;
 			$row[] = '<a href="'.site_url('faqs/backend/form/'.$faqs->faqs_id).'">Edit</a> / <a href="'.site_url('faqs/backend/delete/'.$faqs->faqs_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_faqs_datatable->count_all(),
            "recordsFiltered" => $this->model_faqs_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_faqs->get_data_single($id);
		
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
		
		$this->load->view('faqs/faqs/form', $data);
	}
	
	public function save_update($id = ''){	
		
		$this->form_validation->set_rules('faqs_question', 'Question(En)', "trim|required");
		$this->form_validation->set_rules('faqs_question_ar', 'Question(Ar)', "trim|required");
		$this->form_validation->set_rules('faqs_answer', 'Answer(En)', "trim|required");
		$this->form_validation->set_rules('faqs_answer_ar', 'Answer(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'faqs_question' => $this->input->post('faqs_question'),
				'faqs_answer' =>  $this->input->post('faqs_answer'),
				'faqs_question_ar' => $this->input->post('faqs_question_ar'),
				'faqs_answer_ar' =>  $this->input->post('faqs_answer_ar'),
				'faqs_username_update' => $this->session->userdata('session_username'),
				'faqs_datetime_update' => date('Y-m-d H:i:s'),
				'faqs_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			// update 
			if($id != '') {	
				$this->model_faqs->update_data($data, $id);
				
				redirect('faqs/backend/index', 'location');
				
			// insert
			} else {	
				$data['faqs_username_create'] = $this->session->userdata('session_username');
				$data['faqs_datetime_create'] = date('Y-m-d H:i:s');
				$data['faqs_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_faqs->insert_data($data);
				
				redirect('faqs/backend/index', 'location');
			}
		} else {
			$this->form($id);
		}
	}
	
	public function delete($id){
		$this->model_faqs->delete_data($id);

		redirect('faqs/backend/index','location');
	} 
}
?>