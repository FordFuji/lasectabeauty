<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('news_tips/model_news_tips');
		$this->load->model('news_tips/model_news_tips_data_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/news_tips_data/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// news_tips_data	
	public function news_tips_data() {
		
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
		$this->load->view('news_tips/news_tips_data/list', $data);
		/* end body */
	}
	
	public function news_tips_data_server_processing() {
		$list = $this->model_news_tips_data_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $news_tips_data) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $news_tips_data->news_tips_data_id;
			
			if($news_tips_data->news_tips_data_image != '') {
				$row[] = '<img src="'.base_url('uploads/news_tips_data/'.$news_tips_data->news_tips_data_image).'" width="150">';		
			} else {
				$row[] = '';
			}
			
            $row[] = $news_tips_data->news_tips_data_name;
            $row[] = $news_tips_data->news_tips_data_description;
            
			$row[] = '<a href="'.site_url('news_tips/backend/news_tips_data_form/'.$news_tips_data->news_tips_data_id).'">Edit</a> / <a href="'.site_url('news_tips/backend/news_tips_data_delete/'.$news_tips_data->news_tips_data_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_news_tips_data_datatable->count_all(),
            "recordsFiltered" => $this->model_news_tips_data_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function news_tips_data_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_news_tips->get_news_tips_data_single($id);
		
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
		
		$this->load->view('news_tips/news_tips_data/form', $data);
	}
	
	public function news_tips_data_save_update($id = ''){	
		$this->form_validation->set_rules('news_tips_data_type', 'News Type', "trim|required");
		$this->form_validation->set_rules('news_tips_data_name', 'News Name(En)', "trim|required");
		$this->form_validation->set_rules('news_tips_data_name_ar', 'News Name(Ar)', "trim|required");
		$this->form_validation->set_rules('news_tips_data_description', 'News Description(En)', "trim|required");
		$this->form_validation->set_rules('news_tips_data_description_ar', 'News Description(Ar)', "trim|required");
		$this->form_validation->set_rules('news_tips_data_detail', 'News Detail(En)', "trim|required");
		$this->form_validation->set_rules('news_tips_data_detail_ar', 'News Detail(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'news_tips_data_type' => $this->input->post('news_tips_data_type'),
				'news_tips_data_name' => $this->input->post('news_tips_data_name'),
				'news_tips_data_description' =>  $this->input->post('news_tips_data_description'),
				'news_tips_data_detail' =>  $this->input->post('news_tips_data_detail'),
				'news_tips_data_name_ar' => $this->input->post('news_tips_data_name_ar'),
				'news_tips_data_description_ar' =>  $this->input->post('news_tips_data_description_ar'),
				'news_tips_data_detail_ar' =>  $this->input->post('news_tips_data_detail_ar'),
				'news_tips_data_username_update' => $this->session->userdata('session_username'),
				'news_tips_data_datetime_update' => date('Y-m-d H:i:s'),
				'news_tips_data_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			if(!empty($_FILES['news_tips_data_image'])) {
				$config['upload_path']          = FCPATH.'uploads/news_tips_data/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('news_tips_data_image')) {
                    $data_image = $this->upload->data();
                    
                    $config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/news_tips_data/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/news_tips_data/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 444;
					$config_resize['height'] = 375;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();
					
					$data['news_tips_data_image'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}
			
			// update 
			if($id != '') {	
				$this->model_news_tips->update_news_tips_data($data, $id);
				
				redirect('news_tips/backend/news_tips_data', 'location');
				
			// insert
			} else {	
				$data['news_tips_data_username_create'] = $this->session->userdata('session_username');
				$data['news_tips_data_datetime_create'] = date('Y-m-d H:i:s');
				$data['news_tips_data_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_news_tips->insert_news_tips_data($data);
				
				redirect('news_tips/backend/news_tips_data', 'location');
			}
		} else {
			$this->news_tips_data_form($id);
		}
	}
	
	public function news_tips_data_delete($id){
		$this->model_news_tips->delete_news_tips_data($id);

		redirect('news_tips/backend/news_tips_data','location');
	}
	// end news_tips_data 
	
	
}
?>