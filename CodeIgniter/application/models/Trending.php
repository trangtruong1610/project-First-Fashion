<?php
class Trending extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function get_option() {
		$sql = "SELECT DISTINCT product.id, product.Name, product.Price, product.File, product.Trending FROM product JOIN middle ON product.id = middle.product_id JOIN category ON category.id = middle.category_id";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	public function update_trend($id)
	{
		$sql = "UPDATE product SET Trending = 1 WHERE id  = {$id}";
		$result = $this->db->query($sql);
		return $result;
	}
	public function deselect_all($id)
	{
		$sql = "UPDATE product SET Trending = 0 WHERE id  <> {$id}";
		$result = $this->db->query($sql);
		return $result;
	}
	public function display_trending(){
		$sql = "SELECT * FROM product WHERE Trending = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}
