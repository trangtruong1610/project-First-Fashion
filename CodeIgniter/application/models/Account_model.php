<?php
class Account_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
	public function account_info() {
		$sql = "SELECT * FROM account JOIN accounttype ON account.AccTypeID = accounttype.AccTypeID";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}
