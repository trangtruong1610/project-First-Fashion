<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->model('trending');
		$this->load->model('product_all');
	}
	public function index()
	{
		$data['trending'] = $this->trending->display_trending();
		$this->load->view('/client/User_Homepage', $data);
	}
}


?>
