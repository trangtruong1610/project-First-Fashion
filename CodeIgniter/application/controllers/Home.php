<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->model('product_all');
		$this->load->model('trending');
	}
	public function index()
	{
		$id = $_SESSION['trending_pool'];

		$result = array();

		for($i = 0; $i < count($id); $i++) {
			$item = $this->product_all->get_by_id($id[$i]);
			array_push($result, $item);
		}

		$data['trending'] = $result;

		$this->load->view('/client/User_Homepage', $data);
	}
}


?>
