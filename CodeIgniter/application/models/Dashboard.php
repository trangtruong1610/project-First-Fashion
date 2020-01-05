<?php
class Dashboard extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function insert($data)
	{
		$this->db->insert('product', $data);
	}
	public function delete($id)
	{
		$this->db->delete('product', array('id' => $id));
	}
	public function get_maxid()
	{
		$sql = "SELECT max(id) FROM product";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
//	public function add($file)
//	{
//		$this->db->insert('file', $file);
//	}
}
?>
