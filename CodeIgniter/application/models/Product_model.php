<?php
class Product_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	public function get_total_record() {
		return $this->db->count_all("product");
	}
	public function get_current_page_records($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("product");

		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}

}
