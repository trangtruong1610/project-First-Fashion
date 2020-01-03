<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_all');
		$this->load->library("pagination");
	}

	public function load_db()
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_all();
		return $result;
	}
		public function index()
	{
		$config = array();
		$config['total_rows'] = $this->product_all->record_count();
		$config['per_page'] = 9;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);
		$result = $this->load_db();
		$data['product'] = $result;
		$data['brand'] = $this->product_all->get_brand();

		$this->load->view('/client/product.php', $data);
	}
}
?>
