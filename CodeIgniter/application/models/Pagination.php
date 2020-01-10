<?php
class Pagination extends CI_Model
{
	public function __construct() {
		parent::__construct();
		$this->load->database('firs-fashion');
	}

	public function total_record(){
		$sql = 'SELECT count(*) as total_record FROM product';
		$query = $this->db->query($sql);
		return $query;
	}
}
