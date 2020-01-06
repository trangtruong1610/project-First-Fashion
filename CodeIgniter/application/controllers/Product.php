<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_all');
		$this->load->library("pagination");
	}

	public function get_all()
	{
		$this->load->model('product_all');
		$result = $this->product_all->get_all();
		$data['data'] = $result;
		$this->load->view('/client/Product', $data);
	}
	public function get_by_id($id)
	{
		$this->load->model('product_all');
		$files = $this->product_all->get_file_by_id($id);
		$data['files'] = $files;
		$all_data = $this->product_all->get_by_id($id);
		$data['data'] = $all_data;
		$this->load->view('common/an/views/product_detail.php', $data);
	}
	public function id_compare()
	{
		$id = $this->input->post('add');
		if (isset($_POST["add"])){
			$id = (int)($_POST['add']);
			if (count($_SESSION['compare']) < 3){
				if (in_array($id, $_SESSION['compare']))
				{
					echo 'Add success';
				}
				else{
					$_SESSION['compare'][] = $id;
					echo 'Add success';

				}
			}else{
				echo 'Compare list are full';
			}

		}
		var_dump($_SESSION);
		redirect(base_url()."product/{$id}");
	}

}
?>
