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
		$sql = 'SELECT * FROM product LEFT JOIN file ON product.productid = file.product_id WHERE file.file_role = "avatar"';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_brand()
	{
		$sql = 'SELECT DISTINCT * FROM category WHERE cate_type = "brand" GROUP BY NameCate';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>
