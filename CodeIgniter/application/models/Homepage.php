<?php
class Homepage extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
	}
}
