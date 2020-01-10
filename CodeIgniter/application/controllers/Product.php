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

		//display similar products of the current product in view
		$data['similar'] = $this->similar_product($id);

		//display the categories of the current products
		$data['category'] = $this->product_all->category($id);

		$this->load->view('common/views/product_detail.php', $data);
	}
	public function export_file($id)
	{
		$this->load->model('product_all');

		$files = $this->product_all->get_file_by_id($id);
		$data['files'] = $files;
		$all_data = $this->product_all->get_by_id($id);
		$data['data'] = $all_data;

		//display similar products of the current product in view
		$data['similar'] = $this->similar_product($id);

		//display the categories of the current products
		$data['category'] = $this->product_all->category($id);

		$html = $this->load->view('common/views/product_detail.php', $data, True);

		header("Content-type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=document_name.doc");
		echo "<html>";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
		echo "<body>";
		echo $html;
		echo "</body>";
		echo "</html>";
	}
	public function similar_product($id) {
		//display product with same category
		$binding = $this->product_all->binding_by_product($id);
		foreach ($binding as $binding);
		$similar = $this->product_all->similar_product($binding);
		return $similar;
	}
	public function select_by_category() {

	}
}
?>
