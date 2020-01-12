<?php

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

	}
	public function add()
	{
		$this->load->view('admin/add');
	}

	public function form_validation()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('size', 'Size', 'required');
		$this->form_validation->set_rules('color', 'Color', 'required');
		$this->form_validation->set_rules('material', 'Material', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('origin', 'Origin', 'required');
		if (empty($_FILES['file']['name']))
		{
			$this->form_validation->set_rules('file', 'Document', 'required');
		}
		array('required' => 'You must provide a %s.');

		if ($this->form_validation->run())
		{
			$upload_path = base_url('../upload/');
			$this->load->library("upload");
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpeg|gif|jpg|png';
			$config['max_size'] = '5120';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';
			$config['remove_spaces']  = TRUE;
			$this->load->library('upload',$config);
			$this->load->model('dashboard');
			$data_img_upload = $this->upload->data();
			$path_image = $upload_path . $data_img_upload["file_name"];

			$n = $this->dashboard->get_maxid();
			$new_id = (int)$n["max(id)"] + 1;

			$this->load->model('dashboard');
			$data = array(
				'id' => $new_id,
				'Name' => $this->input->post('name'),
				'Size' => $this->input->post('size'),
				'Color' => $this->input->post('color'),
				'Material' => $this->input->post('material'),
				'Description' => $this->input->post('description'),
				'Price' => $this->input->post('price').'$',
				'Origin' => $this->input->post('origin'),
				'File' => $path_image,
				'status' => 1,
			);
			$this->dashboard->insert($data);
			redirect(base_url().'dashboard');
		}
		else
		{
			$this->load->view('admin/add');
		}
	}

	public function delete($id)
	{

		$this->load->model('dashboard');
		$this->dashboard->delete($id);
		redirect(base_url().'/dashboard');

	}
	public function member(){
		$this->load->view('admin/add_member');
	}
	public function form_member()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		array('required' => 'You must provide a %s.');
		if ($this->form_validation->run())
		{
			$this->load->model('dashboard');
			$data = array(
				'Username' => $this->input->post('username'),
				'Password' => $this->input->post('password'),
				'EmployeeName' => $this->input->post('name'),
				'Email' => $this->input->post('email'),
				'Phone' => $this->input->post('phone'),
				'AccTypeID' => 1,
			);
			$this->dashboard->insert_member($data);
			$_SESSION['msg'] = "<script type='text/javascript'>alert('Add successful');</script>";
			$this->load->view('admin/dashboard');
		}
		else{
			$_SESSION['err_msg'] = "<script type='text/javascript'>alert('Add Fail');</script>";
			$this->load->view('admin/add_member');
		}
	}
	public function category()
	{
		$this->load->view('admin/add_category');
	}
	public function form_category()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('category_name', 'Category Name', 'required');
		array('required' => 'You must provide a %s.');

		if ($this->form_validation->run())
		{
			$data = array(
				'CategoryName' => $this->input->post('category_name'),
				'parent_id' => $this->input->post('parent_id'),
				'CategoryType' => $this->input->post('brand'),
			);
			$this->load->model('dashboard');
			$this->dashboard->insert_category($data);
			$_SESSION['msg'] = "<script type='text/javascript'>alert('Add successful');</script>";
			$this->load->view('admin/dashboard');
		}
		else{
			$_SESSION['err_msg'] = "<script type='text/javascript'>alert('Add Fail');</script>";
			$this->load->view('admin/add_category');
		}
	}
	public function login()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		array('required' => 'You must provide a %s.');

		if ($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('homepage');
			$row = $this->homepage->login($username);
			if ($row != 0)
			{
				if ($row['Password'] == $password)
				{
					$session_user = [
						'role' => $row['id'],
					];
					// save user to session and go to dashboard
					$_SESSION['user'] = $session_user;
					redirect(base_url().'dashboard');
				}else{
					$_SESSION['err_msg'] = 'Wrong Password';
					redirect(base_url().'login');
				}
			}
			else{
				$_SESSION['err_msg'] = 'Wrong Username or Password';
				redirect(base_url().'login');
			}
		}
		else{
			$this->load->view('admin/login');
		}
	}

}
