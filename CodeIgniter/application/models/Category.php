<?php
class Category extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}

	public function fashion()
	{
		$sql = "select p.id, p.Name, p.Size, p.Color,p.Material, p.Description, p.File, p.Price, p.Origin, p.Status from product p join middle m on p.id = m.product_id join category cha on m.category_id = cha.id join category con on cha.id = con.parent_id	where con.parent_id = 1 group by p.id";
		$query = $this->db->query($sql);
		return $query->result_array();

	}
	public function children()
	{
		$sql = "select p.id, p.Name, p.Size, p.Color,p.Material, p.Description, p.File, p.Price, p.Origin, p.Status from product p join middle m on p.id = m.product_id join category cha on m.category_id = cha.id join category con on cha.id = con.parent_id	where con.parent_id = 3 group by p.id";
		$query = $this->db->query($sql);
		return $query->result_array();

	}

	public function accessories()
	{
		$sql = "select p.id, p.Name, p.Size, p.Color,p.Material, p.Description, p.File, p.Price, p.Origin, p.Status from product p join middle m on p.id = m.product_id join category cha on m.category_id = cha.id join category con on cha.id = con.parent_id	where con.parent_id = 2 group by p.id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>
