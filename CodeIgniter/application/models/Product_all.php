<?php
class Product_all extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}

	public function get_all()
	{
		$sql = 'select * from product';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_by_id($id)
	{
		$sql = "select * from product join file on product.id = file.product_id where id = '{$id}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}

?>
