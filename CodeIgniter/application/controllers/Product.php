<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

		public function get_all()
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_all();
		$data['data'] = $result;
		$this->load->view('/client/Product', $data);
	}
	public function get_by_id($id)
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_by_id($id);
		$data['data'] = $result;
		$this->load->view('/client/product_id', $data);
	}
}
?>
