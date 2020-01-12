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
		$sql = "select link from product  join file on product.id = file.product_id where id ='{$id}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_brand()
	{
		$sql = 'SELECT DISTINCT * FROM category WHERE CategoryType = "brand" GROUP BY CategoryName';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function similar_product($binding) {
		$sql = "SELECT * FROM product JOIN middle ON product.id = middle.product_id JOIN category ON category.id = middle.category_id WHERE category.CategoryName = '{$binding['CategoryName']}' AND product.id <> '{$binding['product_id']}' LIMIT 3";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function binding_by_product ($id) {
		$sql = "SELECT CategoryName, product_id FROM middle JOIN category ON middle.category_id = category.id WHERE middle.product_id = '{$id}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function category($id) {
		$sql = "SELECT CategoryName FROM category JOIN middle ON middle.category_id = category.id WHERE middle.product_id = '{$id}'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function binding($binding) {
		$sql = "SELECT id FROM category child JOIN category parent ON child.parent_id = parent.id WHERE parent.CategoryName = '{$binding}' OR child.parent_id = (SELECT id FROM category WHERE CatgoryName = '{$binding}')";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function select_category($binding) {
		$sql = "SELECT * FROM product JOIN middle ON product.id = middle.product_id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}
?>
