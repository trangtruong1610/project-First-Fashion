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
		$this->load->model('dashboard');
		$this->load->model('product_all');
	}
	public function get_by_id($id) {
		$this->load->model('product_all');
		$data['edit'] = $this->product_all->get_by_id($id);
		$this->load->view('admin/edit', $data);
	}
	public function upload_image() {
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
		$url = $this->input->post($field_name);
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
		$file_link = $this->upload_image();

		$post = $this->input->post();

		$update_data = array(
			'Name' 			=> $post['Name'],
			'Size' 			=> $post['Size'],
			'Color' 		=> $post['Color'],
			'Material' 		=> $post['Material'],
			'Description'	=> $post['Description'],
			'Price' 		=> $post['Price'] . '$',
			'Origin' 		=> $post['Origin'],
			'File' 			=> !empty($file_link) ? $file_link : $post['File'],
			'Status'		=> $post['Status'],
		);
		$this->load->model('dashboard');
		$result = $this->dashboard->update_product($update_data, $id);
		if($result == TRUE) {
			echo '<script type="text/javascript">alert("Update Success. All changes saved")</script>';
			$data['preview'] = $this->product_all->get_by_id($id);
			$data['files'] = $this->product_all->get_file_by_id($id);
			$data['category'] = $this->product_all->category($id);
			$this->load->view('common/views/preview',$data);
		} else {
			echo "Update error! Please check your input field.";
		}
	}
}


