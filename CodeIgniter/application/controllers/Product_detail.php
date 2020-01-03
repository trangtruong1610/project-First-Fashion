<?php
class Product_detail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		$this->load->view('/client/product_detail.php');
	}
}
?>
