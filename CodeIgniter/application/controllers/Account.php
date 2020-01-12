<?php

class Account extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->model('account_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['admin'] = $this->account_model->account_info();
		$this->load->view('/common/views/staff_management', $data);
	}
	public function my_account(){
		$data['my_account'] = $_SESSION['user'];
		$this->load->view('/common/views/accountinfo', $data);
	}
}

?>
