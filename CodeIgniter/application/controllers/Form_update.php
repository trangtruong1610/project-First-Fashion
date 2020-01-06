<?php

class Form_update extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Dashboard');
		$this->load->model('Product_all');
	}
	public function get_by_id($id) {
		$this->load->model('product_all');
		$this->load->model('dashboard');
		$data['edit'] = $this->Product_all->get_by_id($id);
		$this->load->view('admin/edit', $data);
	}
	public function edit_by_id($id)
	{
		$update_data = array(
			'Name' 			=> $this->input->post('Name'),
			'Size' 			=> $this->input->post('Size'),
			'Color' 		=> $this->input->post('Color'),
			'Material' 		=> $this->input->post('Material'),
			'Description'	=> $this->input->post('Description'),
			'Price' 		=> $this->input->post('Price') . '$',
			'Origin' 		=> $this->input->post('Origin'),
			'File' 			=> $this->input->post('File'),
			'status'		=> $this->input->post('status'),
		);
		$this->load->model('dashboard');
		$result = $this->dashboard->update_product($update_data, $id);
		if($result == TRUE) {
			echo "Update Success. All changes saved";
			redirect(base_url().'dashboard');
		} else {
			$this->load->view('admin/dashboard');
		}
	}
}
