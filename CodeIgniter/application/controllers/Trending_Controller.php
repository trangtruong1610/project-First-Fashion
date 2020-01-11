<?php

class Trending_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('trending');
	}
	public function trending_add() {
		$data['label'] = $this->trending->get_option();

		$post = $this->input->post();

		$_SESSION['trending_pool']= array();

		if(!empty($post['trending'])) {
			if (count($_SESSION['trending_pool']) < 8) {
				foreach ($post['trending'] as $checked) {
					$tmp = array_push($_SESSION['trending_pool'], $checked);
				}
			} else {
				$data['error'] = "Please select only 8 products for trending.";
				$_SESSION['trending_pool'] = array();
			}
		}
		$this->load->view('/admin/trending', $data);
	}
}
