<?php

class Trending_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('first-fashion');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('trending');
		$this->load->model('product_all');
	}
	public function trending() {
		$data['label'] = $this->trending->get_option();
		$this->load->view('/admin/trending', $data);

	}
	public function trending_add()
	{
		$post = $this->input->post();

		if (!empty($post['trending'])) {
			$id_list = $post['trending'];
			if ((count($id_list) < 9) && (count($id_list) > 3)) {
				for ($i = 0; $i < count($id_list); $i++) {
					$deselect = $this->trending->deselect_all($id_list[$i]);
				}
				if($deselect == TRUE) {
					for ($i = 0; $i < count($id_list); $i++) {
						$update_data = $this->trending->update_trend($id_list[$i]);
				}
				}
				if ($update_data == TRUE) {
					redirect(base_url() . 'trending_controller/trending');
				}
			}
			else {
				$post['trending'] = array();
				redirect(base_url() . 'trending_controller/trending');
			}
		}
	}
}
