<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('home/model_home');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/banner/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// banner	
	public function banner() {
		$data['rowsLeft'] = $this->model_home->getBannerResult('Left');
		$data['rowsRight'] = $this->model_home->getBannerResult('Right');
		
		$data['row'] = $this->model_home->get_text_single();
		
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
		
		$this->load->view('home/banner/form', $data);
	}
	
	public function banner_save_update() {	
		$this->form_validation->set_rules('text_text1', 'Text 1(En)', "trim|required");
		$this->form_validation->set_rules('text_text1_ar', 'Text 1(Ar)', "trim|required");
		$this->form_validation->set_rules('text_text2', 'Text 2(En)', "trim|required");
		$this->form_validation->set_rules('text_text2_ar', 'Text 2(Ar)', "trim|required");
		$this->form_validation->set_rules('text_text3', 'Text 3(En)', "trim|required");
		$this->form_validation->set_rules('text_text3_ar', 'Text 3(Ar)', "trim|required");
		
		$this->load->library('upload');

		if($this->form_validation->run($this) == TRUE) {
			if(!empty($_FILES['banner_image_left'])) {
				$i = 0;
				foreach($_FILES['banner_image_left']['name'] as $file) {
					if(move_uploaded_file($_FILES['banner_image_left']['tmp_name'][$i], FCPATH.'uploads/banner/'.$_FILES['banner_image_left']['name'][$i])) {
						$data = array(
							'banner_image' => $_FILES['banner_image_left']['name'][$i],
							'banner_side' => 'Left',
							'banner_username_update' => $this->session->userdata('session_username'),
							'banner_datetime_update' => date('Y-m-d H:i:s'),
							'banner_ip_update' => $_SERVER['REMOTE_ADDR']
						);
						
						$this->db->insert('ci_banner', $data);
					}
					/*$foo = new upload($_FILES['banner_image_left']['tmp_name'][$i]); 
					if($foo->uploaded) {
						$md5 = md5(rand());
						$foo->file_new_name_body = $md5;
						$foo->image_resize = false;
						if($_FILES['banner_image_left']['type'][$i] == 'image/png') {
							$ext = '.png';
							$foo->image_convert = 'png';	
						} elseif($_FILES['banner_image_left']['type'][$i] == 'image/jpeg') {
							$ext = '.jpg';
							$foo->image_convert = 'jpg';
						} else {
							$ext = '.gif';
							$foo->image_convert = 'gif';
						}
						/*$foo->image_x = 799;
						$foo->image_y = 704;*/
						/*$foo->process(FCPATH.'uploads/banner/');
						if($foo->processed) {
							$data = array(
								'banner_image' => $md5.$ext,
								'banner_side' => 'Left',
								'banner_username_update' => $this->session->userdata('session_username'),
								'banner_datetime_update' => date('Y-m-d H:i:s'),
								'banner_ip_update' => $_SERVER['REMOTE_ADDR']
							);
							
							$this->db->insert('ci_banner', $data);

							$foo->clean();
						} else {
							echo 'error : ' . $foo->error;
						} 
					}*/

					$i++;
				}
			} 
			
			if(!empty($_FILES['banner_image_right'])) {
				$i = 0;
				foreach($_FILES['banner_image_right']['name'] as $file) {
					if(move_uploaded_file($_FILES['banner_image_right']['tmp_name'][$i], FCPATH.'uploads/banner/'.$_FILES['banner_image_right']['name'][$i])) {
						$data = array(
							'banner_image' => $_FILES['banner_image_right']['name'][$i],
							'banner_side' => 'Right',
							'banner_username_update' => $this->session->userdata('session_username'),
							'banner_datetime_update' => date('Y-m-d H:i:s'),
							'banner_ip_update' => $_SERVER['REMOTE_ADDR']
						);
						
						$this->db->insert('ci_banner', $data);
					}
					/*$foo = new upload($_FILES['banner_image_right']['tmp_name'][$i]); 
					if($foo->uploaded) {
						$md5 = md5(rand());
						$foo->file_new_name_body = $md5;
						$foo->image_resize = false;
						if($_FILES['banner_image_right']['type'][$i] == 'image/png') {
							$ext = '.png';
							$foo->image_convert = 'png';	
						} elseif($_FILES['banner_image_right']['type'][$i] == 'image/jpeg') {
							$ext = '.jpg';
							$foo->image_convert = 'jpg';
						} else {
							$ext = '.gif';
							$foo->image_convert = 'gif';
						}
						/*$foo->image_x = 799;
						$foo->image_y = 704;*/
						/*$foo->process(FCPATH.'uploads/banner/');
						if($foo->processed) {
							$data = array(
								'banner_image' => $md5.$ext,
								'banner_side' => 'Right',
								'banner_username_update' => $this->session->userdata('session_username'),
								'banner_datetime_update' => date('Y-m-d H:i:s'),
								'banner_ip_update' => $_SERVER['REMOTE_ADDR']
							);
							
							$this->db->insert('ci_banner', $data);

							$foo->clean();
						} else {
							echo 'error : ' . $foo->error;
						} 
					}*/		
					$i++;
				}
			} 
			
			$data = array(
				'text_text1' => $this->input->post('text_text1'),
				'text_text1_ar' => $this->input->post('text_text1_ar'),
				'text_text2' => $this->input->post('text_text2'),
				'text_text2_ar' => $this->input->post('text_text2_ar'),
				'text_text3' => $this->input->post('text_text3'),
				'text_text3_ar' => $this->input->post('text_text3_ar'),
			);
			
			$this->model_home->update_text($data);
			
			redirect('home/backend/banner', 'location');
		} else {
			$this->banner();
		}
	}
	
	public function banner_delete($id){
		$this->model_home->delete_banner($id);

		redirect('home/backend/banner','location');
	}
	// end banner 
	
	// new_arrivals	
	public function new_arrivals() {
		$data['row'] = $this->model_home->get_new_arrivals_single();
		
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
		
		$this->load->view('home/new_arrivals/form', $data);
	}
	
	public function new_arrivals_save_update() {	
		$this->form_validation->set_rules('new_arrivals_link', 'Link', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'new_arrivals_link' => $this->input->post('new_arrivals_link'),
				'new_arrivals_username_update' => $this->session->userdata('session_username'),
				'new_arrivals_datetime_update' => date('Y-m-d H:i:s'),
				'new_arrivals_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$this->db->update('ci_new_arrivals', $data);
		} else {
			$this->new_arrivals();
		}

		redirect('home/backend/new_arrivals','location');
	}
	// end new_arrivals

	// banner_2	
	public function banner_2() {
		$data['row'] = $this->model_home->get_banner_2_single();
		
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
		
		$this->load->view('home/banner_2/form', $data);
	}
	
	public function banner_2_save_update() {	
		$this->form_validation->set_rules('banner_2_name', 'Name(En)', "trim|required");
		$this->form_validation->set_rules('banner_2_name_ar', 'Name(Ar)', "trim|required");
		$this->form_validation->set_rules('banner_2_description', 'Description(En)', "trim|required");
		$this->form_validation->set_rules('banner_2_description_ar', 'Description(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'banner_2_name' => $this->input->post('banner_2_name'),
				'banner_2_name_ar' => $this->input->post('banner_2_name_ar'),
				'banner_2_description' => $this->input->post('banner_2_description'),
				'banner_2_description_ar' => $this->input->post('banner_2_description_ar'),
				'banner_2_embed_youtube' => $this->input->post('banner_2_embed_youtube'),
				'banner_2_username_update' => $this->session->userdata('session_username'),
				'banner_2_datetime_update' => date('Y-m-d H:i:s'),
				'banner_2_ip_update' => $_SERVER['REMOTE_ADDR']
			);

			if(!empty($_FILES['banner_2_image'])) {
				$config['upload_path']          = FCPATH.'uploads/banner/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('banner_2_image')) {
                    $data_image = $this->upload->data();
                    
                    $config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/banner/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/banner/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 584;
					$config_resize['height'] = 363;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();
					
					$data['banner_2_image'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}
			
			$this->db->update('ci_banner_2', $data);
		} else {
			$this->banner_2();
		}

		redirect('home/backend/banner_2','location');
	}
	// end banner_2

	// instagram	
	public function instagram() {
		$data['row'] = $this->model_home->get_instagram_single();
		
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
		
		$this->load->view('home/instagram/form', $data);
	}
	
	public function instagram_save_update() {	
		$this->form_validation->set_rules('instagram_name', 'Name', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'instagram_name' => $this->input->post('instagram_name'),
				'instagram_username_update' => $this->session->userdata('session_username'),
				'instagram_datetime_update' => date('Y-m-d H:i:s'),
				'instagram_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			$this->db->update('ci_instagram', $data);
		} else {
			$this->instagram();
		}

		redirect('home/backend/instagram','location');
	}
	// end instagram

}
?>