<?php
class Compare extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}

	public function compare($data)
	{
		if ($data != Null ){
			$sql = 'SELECT * FROM product WHERE id IN (' . implode(',', $data) . ')';
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		else{
			$this->load->view('/client/compare');
		}

	}

}

?>
