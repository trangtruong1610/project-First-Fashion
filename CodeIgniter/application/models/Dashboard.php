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
		return $query->row_array();
	}
	public function update_product($update_data, $id) {
		if($update_data['File'] == '') {
			$sql = "UPDATE product SET name = '{$update_data["Name"]}', color = '{$update_data["Color"]}', size = '{$update_data["Size"]}', material = '{$update_data["Material"]}', description = '{$update_data["Description"]}', price = '{$update_data["Price"]}', origin = '{$update_data["Origin"]}', Status = {$update_data["Status"]}, file = '{$update_data["File"]}' WHERE id = '{$id}'";
		}
		ELSE {
			$sql = "UPDATE product SET name = '{$update_data["Name"]}', color = '{$update_data["Color"]}', size = '{$update_data["Size"]}', material = '{$update_data["Material"]}', description = '{$update_data["Description"]}', price = '{$update_data["Price"]}', origin = '{$update_data["Origin"]}', Status = '`{$update_data["Status"]}`' WHERE id = '{$id}'";
		}

		$query = $this->db->query($sql);

		return $query; // return true || false
	}
}
?>
