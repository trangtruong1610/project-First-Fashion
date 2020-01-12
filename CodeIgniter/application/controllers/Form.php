<?php

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');

	}
	public function view()
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
		$this->form_validation->set_rules('avatar', 'Avatar', 'required');
		array('required' => 'You must provide a %s.');
		if ($this->form_validation->run())
		{
			$this->load->model('dashboard');

			$n = $this->dashboard->get_maxid();
			foreach ($n as $id);
			$new_id = (int)$id["max(id)"] + 1;
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
				'File' => $this->input->post('avatar'),
				'status' => 1,
			);
			$this->dashboard->insert($data);
			redirect(base_url().'form/inserted');
		}
		else
		{
			$this->view();
		}
	}
	public function inserted()
	{
		$this->view();
	}
	public function delete($id)
	{
		$this->load->model('dashboard');
		$this->dashboard->delete($id);
		redirect(base_url().'/dashboard');
	}

}
