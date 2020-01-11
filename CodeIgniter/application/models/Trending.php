<?php
class Trending extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function get_option() {
		$sql = "SELECT DISTINCT product.id, product.Name, product.Price, product.File FROM product JOIN middle ON product.id = middle.product_id JOIN category ON category.id = middle.category_id";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}
