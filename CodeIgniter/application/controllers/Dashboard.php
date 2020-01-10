<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function view()
	{
		$this->load->view('/admin/dashboard.php');
	}

	public function index()
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_all();
		$data['data'] = $result;
		$this->load->view('/common/templates/dashboard', $data);
	}
	public function add()
	{
		$this->load->view('/admin/add');
	}
	public function update()
	{
		$this->load->view('/admin/update');
	}
}

?>
