<?php
defined(BASEPATH) OR exit('No direct script access allowed');

class Paginated_product extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper("url");
		$this->load->model("Product_model");
		$this->load->library("pagination");
	}

	public function index()
	{
		$this->load->database();

		//Initial parameters
		$param = array();
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_record = $this->Product_model->get_total_record();
		$row_record = $total_record/4;
		$limit_per_page = 9;

		//load config file
		$config['base_url'] = base_url() . '/product/';
		$config['total_rows'] = $row_record;
		$config['per_page'] = $limit_per_page;
		$config["uri_segment"] = 3;
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = 'First';
		$config['lasst_link'] = 'Last';
		$config['prev_link']  = '&lt;';
		$config['next_link']  = '&gt;';

		$this->pagination->initialize($config);
		$params["results"] = $this->Product_model->get_current_page_records($limit_per_page, $start_index);
		$params["links"] = $this->pagination->create_links();

		$this->load->view('product', $params);

	}
}
