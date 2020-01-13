<?php

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('mess', 'Message', 'required');
		array('required' => 'You must provide a %s.');

		if ($this->form_validation->run()){
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'content' => $this->input->post('mess'),
			);
			$this->load->model('account_model');
			$this->account_model->contact($data);

			$_SESSION['msg'] = "<script type='text/javascript'>alert('Thank for you information. We will contact you soon as possible.');</script>";
			$this->load->view('client/contact');
		}else{
			$this->load->view('client/contact');

		}
	}
}

?>
