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
		$upload_path = './An/assets/upload/';

		$this->load->library("upload");

		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = 'jpeg|gif|jpg|png';
		$config['max_size'] = '5120';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		$config['overwrite']  = TRUE;
		$config['remove_spaces']  = TRUE;
		$this->upload->initialize($config);

		$field_name = "File";

		if ( ! $this->upload->do_upload($field_name))
		{
			$error = array('error' => $this->upload->display_errors());
			echo $error;
		}
		else
		{
			$upload_data = $this->upload->data();
			$dir = 'D:/Studies/Aptech/xampp/htdocs/CodeIgniter';
			$imgData = base_url(str_replace($dir,'', $upload_data['full_path']));
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
		/*	var_dump($update_data);
		die();*/
		if($result == TRUE) {
			echo '<script type="text/javascript">alert("Update Success. All changes saved")</script>';
			$this->load->model('product_all');
			$data['preview'] = $this->product_all->get_by_id($id);
			$data['files'] = $this->product_all->get_file_by_id($id);
			$this->load->view('common/an/views/preview',$data);
		} else {
			$this->load->view('admin/dashboard');
		}
	}
}


