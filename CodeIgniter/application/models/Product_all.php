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
}

?>
