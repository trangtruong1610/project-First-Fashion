<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('/client/User_Homepage.php');
	}
	public function select_category() {
		//Select product by brand
		$brand = 'brand';
		$this->load->model('Homepage');
		$data['category_brand'] = $this->Homepage->select_brand($brand);

		$this->load->view('/client/product', $data);

	}
}


?>
