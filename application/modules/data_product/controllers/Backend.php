<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('data_product/model_data_product');
		$this->load->model('data_product/model_color_datatable');
		$this->load->model('data_product/model_sub_category_datatable');
		$this->load->model('data_product/model_product_datatable');
		$this->load->model('data_product/model_category_datatable');
		$this->load->model('data_product/model_stock_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/color/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// color	
	public function color() {

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
		$this->load->view('data_product/color/list', $data);
		/* end body */
	}
	
	public function color_server_processing() {
		$list = $this->model_color_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $color) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $color->color_id;
			
			$row[] = $color->color_code;
            $row[] = $color->color_name;
            $row[] = $color->color_name_ar;
            $row[] = '<div style="background-color: #'.$color->color_code.'; width: 15px; height: 15px;"></div>';
			$row[] = '<a href="'.site_url('data_product/backend/color_form/'.$color->color_id).'">Edit</a> / <a href="'.site_url('data_product/backend/color_delete/'.$color->color_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_color_datatable->count_all(),
            "recordsFiltered" => $this->model_color_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function color_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_data_product->get_color_single($id);
		
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
		
		$this->load->view('data_product/color/form', $data);
	}
	
	public function color_save_update($id = ''){	
		
		$this->form_validation->set_rules('color_code', 'Code', "trim|required");
		$this->form_validation->set_rules('color_name', 'Color(En)', "trim|required");
		$this->form_validation->set_rules('color_name_ar', 'Color(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'color_code' => $this->input->post('color_code'),
				'color_name' => $this->input->post('color_name'),
				'color_name_ar' => $this->input->post('color_name_ar'),
				'color_username_update' => $this->session->userdata('session_username'),
				'color_datetime_update' => date('Y-m-d H:i:s'),
				'color_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			/*if(!empty($_FILES['color_name_image2'])) {
				$config['upload_path']          = FCPATH.'uploads/color/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('color_name_image2')) {
                    $data_image = $this->upload->data();
                    
                    $config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/color/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/color/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 1920;
					$config_resize['height'] = 520;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();
					
					$data['color_name_image2'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}*/
			
			// update 
			if($id != '') {	
				$this->model_data_product->update_color($data, $id);
				
				redirect('data_product/backend/color', 'location');
				
			// insert
			} else {	
				$data['color_username_create'] = $this->session->userdata('session_username');
				$data['color_datetime_create'] = date('Y-m-d H:i:s');
				$data['color_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_data_product->insert_color($data);
				
				redirect('data_product/backend/color', 'location');
			}
		} else {
			$this->color_form($id);
		}
	}
	
	public function color_delete($id){
		$this->model_data_product->delete_color($id);

		redirect('data_product/backend/color','location');
	}
	// end color 
	
	// category	
	public function category() {
		
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
		$this->load->view('data_product/category/list', $data);
		/* end body */
	}
	
	public function category_server_processing() {
		$list = $this->model_category_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $category) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $category->category_id;
            
			/*if($category->category_image != '') {
				$row[] = '<img src="'.base_url('uploads/category/'.$category->category_image).'" width="150">';		
			} else {
				$row[] = '';
			}
			
			if($category->category_image_mobile != '') {
				$row[] = '<img src="'.base_url('uploads/category/'.$category->category_image_mobile).'" width="100">';		
			} else {
				$row[] = '';
			}*/
			
            $row[] = $category->category_name;
            $row[] = $category->category_name_ar;
            
			$row[] = '<a href="'.site_url('data_product/backend/category_form/'.$category->category_id).'">Edit</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_category_datatable->count_all(),
            "recordsFiltered" => $this->model_category_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function category_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_data_product->get_category_single($id);
		
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
		
		$this->load->view('data_product/category/form', $data);
	}
	
	public function category_save_update($id = ''){	
		
		$this->form_validation->set_rules('category_name', 'Category(En)', "trim|required");
		$this->form_validation->set_rules('category_name', 'Category(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'category_name' => $this->input->post('category_name'),
				'category_name_ar' => $this->input->post('category_name_ar'),
				'category_username_update' => $this->session->userdata('session_username'),
				'category_datetime_update' => date('Y-m-d H:i:s'),
				'category_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			if(!empty($_FILES['category_image'])) {
				$config['upload_path']          = FCPATH.'uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('category_image')) {
                    $data_image = $this->upload->data();
                    
                    /*$config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/category/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/category/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 470;
					$config_resize['height'] = 735;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();*/
					
					$data['category_image'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}

			if(!empty($_FILES['category_image_mobile'])) {
				$config['upload_path']          = FCPATH.'uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('category_image_mobile')) {
                    $data_image = $this->upload->data();
                    
                   /*$config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/category/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/category/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 187;
					$config_resize['height'] = 300;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();*/
					
					$data['category_image_mobile'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}
			
			// update 
			if($id != '') {	
				$this->model_data_product->update_category($data, $id);
				
				redirect('data_product/backend/category', 'location');
				
			// insert
			} else {	
				$data['category_username_create'] = $this->session->userdata('session_username');
				$data['category_datetime_create'] = date('Y-m-d H:i:s');
				$data['category_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_data_product->insert_category($data);
				
				redirect('data_product/backend/category', 'location');
			}
		} else {
			$this->category_form($id);
		}
	}
	
	public function category_delete($id){
		$this->model_data_product->delete_category($id);

		redirect('data_product/backend/category','location');
	}
	// end category
	
	// sub_category	
	public function sub_category() {
		
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
		$this->load->view('data_product/sub_category/list', $data);
		/* end body */
	}
	
	public function sub_category_server_processing() {
		$list = $this->model_sub_category_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $sub_category) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $sub_category->sub_category_id;
            
			/*
			if($sub_category->sub_category_name_image2 != '') {
				$row[] = '<img src="'.base_url('uploads/sub_category/'.$sub_category->sub_category_name_image2).'" width="85">';		
			} else {
				$row[] = '';
			}
			*/
			
            $row[] = $sub_category->category_name;
            
            $row[] = $sub_category->sub_category_name;
            $row[] = $sub_category->sub_category_name_ar;
            
			$row[] = '<a href="'.site_url('data_product/backend/sub_category_form/'.$sub_category->sub_category_id).'">Edit</a> / <a href="'.site_url('data_product/backend/sub_category_delete/'.$sub_category->sub_category_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_sub_category_datatable->count_all(),
            "recordsFiltered" => $this->model_sub_category_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function sub_category_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_data_product->get_sub_category_single($id);
		
		$data['categoryCtrl'] = $this->model_data_product->getCategoryResult();
		
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
		
		$this->load->view('data_product/sub_category/form', $data);
	}
	
	public function sub_category_save_update($id = ''){	
		$this->form_validation->set_rules('category_id', 'Category', "trim|required");
		$this->form_validation->set_rules('sub_category_name', 'Sub Category(En)', "trim|required");
		$this->form_validation->set_rules('sub_category_name_ar', 'Sub Category(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'category_id' => $this->input->post('category_id'),
				'sub_category_name' => $this->input->post('sub_category_name'),
				'sub_category_name_ar' => $this->input->post('sub_category_name_ar'),
				'sub_category_username_update' => $this->session->userdata('session_username'),
				'sub_category_datetime_update' => date('Y-m-d H:i:s'),
				'sub_category_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			/*if(!empty($_FILES['sub_category_name_image2'])) {
				$config['upload_path']          = FCPATH.'uploads/sub_category/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('sub_category_name_image2')) {
                    $data_image = $this->upload->data();
                    
                    $config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/sub_category/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/sub_category/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 1920;
					$config_resize['height'] = 520;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();
					
					$data['sub_category_name_image2'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}*/
			
			// update 
			if($id != '') {	
				$this->model_data_product->update_sub_category($data, $id);
				
				redirect('data_product/backend/sub_category', 'location');
				
			// insert
			} else {	
				$data['sub_category_username_create'] = $this->session->userdata('session_username');
				$data['sub_category_datetime_create'] = date('Y-m-d H:i:s');
				$data['sub_category_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_data_product->insert_sub_category($data);
				
				redirect('data_product/backend/sub_category', 'location');
			}
		} else {
			$this->sub_category_form($id);
		}
	}
	
	public function sub_category_delete($id){
		$this->model_data_product->delete_sub_category($id);

		redirect('data_product/backend/sub_category','location');
	}
	// end sub_category
	
	// product	
	public function product() {
		if($this->input->post('submit') != '') {
			$product_sort = $this->input->post('product_sort');
			$product_id = $this->input->post('product_id');
			
			$i = 0;
			foreach($product_id as $r) {
				$data_update = array(
					'product_sort' => $product_sort[$i]
				);
				
				$where_update = array(
					'product_id' => $r
				);
				
				$this->db->update('ci_product', $data_update, $where_update);
				
				$i++;
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
		$this->load->view('data_product/product/list', $data);
		/* end body */
	}
	
	public function product_server_processing() {
		$list = $this->model_product_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $product) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $product->product_id;
            
            $row[] = '<input type="number" name="product_sort[]" value="'.$product->product_sort.'" class="form-control"><input type="hidden" name="product_id[]" value="'.$product->product_id.'">';
			
            $row[] = $product->category_name;
            
            $row[] = $product->sub_category_name;
            
            $row[] = $product->product_name;
            $row[] = $product->product_name_ar;
            
            if($product->product_image != '') {
				$row[] = '<img src="'.base_url('uploads/product/'.$product->product_image).'" width="150">';		
			} else {
				$row[] = '';
			}
			
			$row[] = $product->product_before_discount_price;
			$row[] = $product->product_price;
            
			$row[] = '<a href="'.site_url('data_product/backend/product_form/'.$product->product_id).'">Edit</a> / <a href="'.site_url('data_product/backend/product_delete/'.$product->product_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_product_datatable->count_all(),
            "recordsFiltered" => $this->model_product_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function product_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_data_product->get_product_single($id);
		
		$data['subCategoryCtrl'] = $this->model_data_product->getSubCategoryResult();	
		
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
		
		$this->load->view('data_product/product/form', $data);
	}
	
	public function product_save_update($id = ''){	
		$this->form_validation->set_rules('sub_category_id', 'Sub Category', "trim|required");
		$this->form_validation->set_rules('product_name', 'Product Name(En)', "trim|required");
		$this->form_validation->set_rules('product_name_ar', 'Product Name(Ar)', "trim|required");
		$this->form_validation->set_rules('product_before_discount_price', 'Product Before Discount Price', "trim|required");
		$this->form_validation->set_rules('product_price', 'Product Price', "trim|required");
		$this->form_validation->set_rules('product_weight', 'Product Weight', "trim|required");
		$this->form_validation->set_rules('product_gross_weight', 'Gross Weight', "trim|required");
		$this->form_validation->set_rules('product_dimension_width', 'Dimension Width', "trim|required");
		$this->form_validation->set_rules('product_dimension_height', 'Dimension Height', "trim|required");
		$this->form_validation->set_rules('product_dimension_depth', 'Dimension Depth', "trim|required");
		$this->form_validation->set_rules('product_description', 'Product Description(En)', "trim|required");
		$this->form_validation->set_rules('product_description_ar', 'Product Description(Ar)', "trim|required");
		$this->form_validation->set_rules('product_ingredient', 'Product Ingredient(En)', "trim|required");
		$this->form_validation->set_rules('product_ingredient_ar', 'Product Ingredient(Ar)', "trim|required");
		//$this->form_validation->set_rules('product_detail', 'Product Detail(En)', "trim|required");
		//$this->form_validation->set_rules('product_detail_ar', 'Product Detail(Ar)', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$data = array(
				'sub_category_id' => $this->input->post('sub_category_id'),
				'product_name' => $this->input->post('product_name'),
				'product_name_ar' => $this->input->post('product_name_ar'),
				'product_before_discount_price' => $this->input->post('product_before_discount_price'),
				'product_price' => $this->input->post('product_price'),
				'product_description' => $this->input->post('product_description'),
				'product_description_ar' => $this->input->post('product_description_ar'),
				'product_ingredient' => $this->input->post('product_ingredient'),
				'product_ingredient_ar' => $this->input->post('product_ingredient_ar'),
				'product_weight' => $this->input->post('product_weight'),
				'product_gross_weight' => $this->input->post('product_gross_weight'),
				'product_dimension_width' => $this->input->post('product_dimension_width'),
				'product_dimension_height' => $this->input->post('product_dimension_height'),
				'product_dimension_depth' => $this->input->post('product_dimension_depth'),
				'product_detail' => $this->input->post('product_detail'),
				'product_detail_ar' => $this->input->post('product_detail_ar'),
				'product_username_update' => $this->session->userdata('session_username'),
				'product_datetime_update' => date('Y-m-d H:i:s'),
				'product_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			if($this->input->post('product_new_arrivals') != '') {
				$data['product_new_arrivals'] = $this->input->post('product_new_arrivals');
			} else {
				$data['product_new_arrivals'] = 'No';
			}
			
			if(!empty($_FILES['product_image'])) {
				$config['upload_path']          = FCPATH.'uploads/product/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('product_image')) {
                    $data_image = $this->upload->data();
                    
                    $config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/product/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/product/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 385;
					$config_resize['height'] = 387;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();
					
					$data['product_image'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}
			
			// update 
			if($id != '') {	
				$this->model_data_product->update_product($data, $id);
				
			// insert
			} else {	
				$data['product_username_create'] = $this->session->userdata('session_username');
				$data['product_datetime_create'] = date('Y-m-d H:i:s');
				$data['product_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_data_product->insert_product($data);
				
			}

			redirect('data_product/backend/product');
		} else {
			$this->product_form($id);
		}
	}
	
	public function product_delete($id){
		$this->model_data_product->delete_product($id);

		redirect('data_product/backend/product','location');
	}
	
	public function deleteProductGallery($product_gallery_id, $stock_id) {
		$where = array(
			'product_gallery_id' => $product_gallery_id
		);
		
		$this->db->delete('ci_product_gallery', $where);
		
		redirect('data_product/backend/stock_form/'.$stock_id);
	}
	// end product
	
	// stock	
	public function stock() {
		if($this->input->post('submit') != '') {
			$stock_sort = $this->input->post('stock_sort');
			$stock_id = $this->input->post('stock_id');

			if(!empty($stock_id)) {
				$i = 0;
				foreach($stock_id as $id) {
					$data_update = array(
						'stock_sort' => $stock_sort[$i]
					);

					$where_update = array(
						'stock_id' => $stock_id[$i]
					);

					$this->db->update('ci_stock', $data_update, $where_update);

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
		$this->load->view('data_product/stock/list', $data);
		/* end body */
	}
	
	public function stock_server_processing() {
		$list = $this->model_stock_datatable->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $stock) {
            //$no++;
            $row = array();
            //$row[] = $no;
            $row[] = $stock->stock_id;
            $row[] = '<input type="number" name="stock_sort[]" value="'.$stock->stock_sort.'" class="form-control" style="width: 150px;"><input type="hidden" name="stock_id[]" value="'.$stock->stock_id.'">';
			/*
			if($stock->stock_name_image2 != '') {
				$row[] = '<img src="'.base_url('uploads/stock/'.$stock->stock_name_image2).'" width="85">';		
			} else {
				$row[] = '';
			}
			*/
			
			$row[] = $stock->product_name;
            $row[] = $stock->color_name;
            $row[] = $stock->stock_amount;
            
			$row[] = '<a href="'.site_url('data_product/backend/stock_form/'.$stock->stock_id).'">Edit</a> / <a href="'.site_url('data_product/backend/stock_delete/'.$stock->stock_id).'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';	
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_stock_datatable->count_all(),
            "recordsFiltered" => $this->model_stock_datatable->count_filtered(),
            "data" => $data,
    	);
        //output to json format
        echo json_encode($output);
	}
	
	public function stock_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_data_product->get_stock_single($id);
		
		$data['productCtrl'] = $this->model_data_product->getProductResult();
		
		$data['colorCtrl'] = $this->model_data_product->getColorResult();
		
		$data['galleryCtrl'] = $this->model_data_product->getProductGalleryResult($id);
		
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
		
		$this->load->view('data_product/stock/form', $data);
	}
	
	public function stock_save_update($id = ''){	
		
		$this->form_validation->set_rules('product_id', 'Product', "trim|required");
		$this->form_validation->set_rules('color_id', 'Color', "trim|required");
		$this->form_validation->set_rules('stock_amount', 'Stock', "trim|required");
		
		if($this->form_validation->run($this) == TRUE) {
			$stock_date_pre_order = date('Y-m-d', strtotime("+".$this->input->post('date_pre_order')." day"));

			$data = array(
				'product_id' => $this->input->post('product_id'),
				'color_id' => $this->input->post('color_id'),
				'stock_amount' => $this->input->post('stock_amount'),
				'stock_date_pre_order' => $stock_date_pre_order,
				'stock_username_update' => $this->session->userdata('session_username'),
				'stock_datetime_update' => date('Y-m-d H:i:s'),
				'stock_ip_update' => $_SERVER['REMOTE_ADDR']
			);
			
			/*if(!empty($_FILES['stock_name_image2'])) {
				$config['upload_path']          = FCPATH.'uploads/stock/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;
				
                $this->load->library('upload', $config);
                
                $this->upload->initialize($config);

                if($this->upload->do_upload('stock_name_image2')) {
                    $data_image = $this->upload->data();
                    
                    $config_resize['image_library'] = 'gd2';
					$config_resize['source_image'] = FCPATH.'uploads/stock/'.$data_image['file_name'];
					$config_resize['new_image'] = FCPATH.'uploads/stock/'.$data_image['file_name'];
					$config_resize['create_thumb'] = FALSE;
					$config_resize['maintain_ratio'] = FALSE;
					$config_resize['width'] = 1920;
					$config_resize['height'] = 520;

					$this->load->library('image_lib', $config_resize);
					$this->image_lib->initialize($config_resize);
					$this->image_lib->resize();
					
					$data['stock_name_image2'] = $data_image['file_name'];
                } else {
					$error = array('error' => $this->upload->display_errors());
					//pre($error);
				}
			}*/
			
			// update 
			if($id != '') {	
				$this->model_data_product->update_stock($data, $id);
				
				$stock_id = $id;
				
			// insert
			} else {	
				$data['stock_username_create'] = $this->session->userdata('session_username');
				$data['stock_datetime_create'] = date('Y-m-d H:i:s');
				$data['stock_ip_create'] = $_SERVER['REMOTE_ADDR'];
					
				$this->model_data_product->insert_stock($data);
				
				$stock_id = $this->model_data_product->getStockIdLasted();
			}
			
			$this->load->library('upload');
			
			//pre($_FILES['product_gallery_image']);
			
			if(!empty($_FILES['product_gallery_image'])) {
				$i = 0;
				foreach($_FILES['product_gallery_image']['tmp_name'] as $file) {
					$foo = new upload($_FILES['product_gallery_image']['tmp_name'][$i]); 
					if($foo->uploaded) {
						$md5 = md5(rand());
						$foo->file_new_name_body = $md5;
					   	$foo->image_resize = true;
					   	if($_FILES['product_gallery_image']['type'][$i] == 'image/png') {
					   		$ext = '.png';
							$foo->image_convert = 'png';	
						} elseif($_FILES['product_gallery_image']['type'][$i] == 'image/jpeg') {
							$ext = '.jpg';
							$foo->image_convert = 'jpg';
						} else {
							$ext = '.gif';
							$foo->image_convert = 'gif';
						}
					   	$foo->image_x = 487;
					   	$foo->image_y = 645;
					   	$foo->process(FCPATH.'uploads/product/');
					   	if ($foo->processed) {
					        $data_gall = array(
					        	'stock_id' => $stock_id,
					        	'product_gallery_image' => $md5.$ext,
					        	'product_gallery_username_create' => $this->session->userdata('session_username'),
								'product_gallery_datetime_create' => date('Y-m-d H:i:s'),
								'product_gallery_ip_create' => $_SERVER['REMOTE_ADDR']
					        );   
					        
					        $this->db->insert('ci_product_gallery', $data_gall);
					        
					     	$foo->clean();
					     	
					     	//echo $md5.$ext;
					   	} else {
					     	echo 'error : ' . $foo->error;
					   	} 		
					}
					
					$i++;
				}
			}
			
			redirect('data_product/backend/stock', 'location');
		} else {
			$this->stock_form($id);
		}
	}
	
	public function stock_delete($id){
		$this->model_data_product->delete_stock($id);

		redirect('data_product/backend/stock','location');
	}
	// end stock 

	public function export_excel_product() {
		header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-Disposition: attachment; filename=order_detail.xls");  //File name extension was wrong
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		
		$html = '
			<table>
				<tr>
					<th>
						Category
					</th>
					<th>
						Sub Category
					</th>
					<th>
						Name
					</th>
					<th>
						Description
					</th>
					<th>
						Ingredient
					</th>
					<th>
						Detail
					</th>
				</tr>';

		$this->db->order_by('ci_product.product_id', 'asc');
		$this->db->join('ci_sub_category', 'ci_product.sub_category_id = ci_sub_category.sub_category_id', 'inner');
		$this->db->join('ci_category', 'ci_sub_category.category_id = ci_category.category_id', 'inner');
		$query = $this->db->get('ci_product');

		$rows = $query->result();

		if(!empty($rows)) {
			foreach($rows as $r) {
				$html .= '
						<tr>
							<td>'.$r->category_name.'</td>
							<td>'.$r->sub_category_name.'</td>
							<td>'.$r->product_name.'</td>
							<td>'.$r->product_description.'</td>
							<td>'.$r->product_ingredient.'</td>
							<td>'.$r->product_detail.'</td>
						</tr>
				';
			}
		}

		$html .= '
			</table>
		';

		echo $html;
	}
}
?>