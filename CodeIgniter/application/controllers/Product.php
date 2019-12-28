<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function load_db()
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_all();
		return $result;
	}
	public function index()
	{
		$result = $this->load_db();
		$data['data'] = $result;
		$this->load->view('/client/Product.php', $data);
	}
}
?>
