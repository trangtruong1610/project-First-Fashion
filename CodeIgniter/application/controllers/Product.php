<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_all');
		$this->load->library("pagination");
	}

	public function get_all()
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_all();

		//Show all product details
		$data['data'] = $result;

		//Display brand name
		$data['brand'] = $this->product_all->get_brand();

		//Display by category
		$data['category'] = $this->select_by_category();

		$this->load->view('/client/Product', $data);
	}
	public function get_by_id($id)
	{
		$this->load->model('product_all');

		$files = $this->product_all->get_file_by_id($id);
		$data['files'] = $files;
		$all_data = $this->product_all->get_by_id($id);
		$data['data'] = $all_data;

		$data['similar'] = $this->similar_product($id);

		$this->load->view('common/an/views/product_detail.php', $data);
	}
	public function similar_product($id) {
		//display product with same category
		$binding = $this->product_all->binding_by_product($id);
		foreach ($binding as $binding);
		$similar = $this->product_all->similar_product($binding);
		return $similar;
	}
	public function select_by_category() {
		$binding = $this->input->post('category');
		$result = $this->product_all->select_category($binding);

		return $result;
		var_dump($result);die();
	}
}
?>
