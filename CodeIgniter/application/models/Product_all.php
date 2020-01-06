<?php
class Product_all extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function record_count()
	{
		$sql = 'SELECT COUNT(*) AS total_record FROM product';
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_all()
	{
		$sql = 'SELECT * FROM product';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_by_id($id)
	{
		$sql = "select * from product where id = '{$id}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_file_by_id($id)
	{
		$sql = "select link from product join file on product.id = file.product_id where id ='{$id}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

//	public function get_brand()
//	{
//		$sql = 'SELECT DISTINCT * FROM category WHERE cate_type = "brand" GROUP BY NameCate';
//		$query = $this->db->query($sql);
//		return $query->result_array();
//	}
}
?>
