<?php
class Homepage extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function login($username)
	{
		$sql = "SELECT * FROM account WHERE Username = '{$username}'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
	public function brand($b)
	{
		$sql = "SELECt  * FROM product JOIN middle ON product.`id` = middle.`product_id` JOIN category ON category.`id` = middle.`category_id` WHERE category.`categoryname` = '{$b}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
