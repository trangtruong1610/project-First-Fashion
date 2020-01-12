<?php
class Homepage extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function login($username)
	{
		$sql = "SELECT * FROM account WHERE Username = '{$username}'";
		$query = $this->db->query($sql);
		return $query->row_array();
	}
}
