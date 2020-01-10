<?php

class Form_update extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Dashboard');
		$this->load->model('Product_all');
	}
	public function get_by_id($id) {
		$this->load->model('product_all');
		$data['edit'] = $this->Product_all->get_by_id($id);
		$this->load->view('admin/edit', $data);
	}
	public function uploade_image(){
		$upload_path = base_url('../upload/');

		$this->load->library("upload");

		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'jpeg|gif|jpg|png';
		$config['max_size'] = '5120';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		$config['overwrite']  = TRUE;
		$config['remove_spaces']  = TRUE;
		$this->upload->initialize($config);

		$field_name = "File";
		$imgData = '';
		if ($_FILES[$field_name]['name'] != '') {
			if ( ! $this->upload->do_upload($field_name))
			{
				$error = array('error' => $this->upload->display_errors());
				echo $error;
			}
			else
			{
				$upload_data = $this->upload->data();
				$imgData = $upload_path.$upload_data['file_name'];
			}
		}

		return $imgData;
	}
	public function edit_by_id($id) {
		$file_link = $this->uploade_image();

		$update_data = array(
			'Name' 			=> $this->input->post('Name'),
			'Size' 			=> $this->input->post('Size'),
			'Color' 		=> $this->input->post('Color'),
			'Material' 		=> $this->input->post('Material'),
			'Description'	=> $this->input->post('Description'),
			'Price' 		=> $this->input->post('Price') . '$',
			'Origin' 		=> $this->input->post('Origin'),
			'File' 			=> $file_link,
			'status'		=> $this->input->post('status'),
		);
		$this->load->model('dashboard');
		$result = $this->dashboard->update_product($update_data, $id);
		if($result == TRUE) {
			echo '<script type="text/javascript">alert("Update Success. All changes saved")</script>';
			$this->load->model('product_all');
			$data['preview'] = $this->product_all->get_by_id($id);
			$data['files'] = $this->product_all->get_file_by_id($id);
			$this->load->model('product_all');
			$data['category'] = $this->product_all->category($id);
			$this->load->view('common/views/preview',$data);
		} else {
			$this->load->view('admin/dashboard');
		}
	}
}


