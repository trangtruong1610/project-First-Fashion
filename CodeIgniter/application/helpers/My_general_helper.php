<?php

function get_product_info() {
	$this->db->select('*');
	$this->db->from('product');
	$this->db->join('file', 'product.file_id = file.file_id', 'left');
	$query = $this->db->get();
	if($query->num_rows() != 0)
	{
		return $query->result_array();
	}
	else
	{
		return false;
	}
}
