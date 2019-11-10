<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
  }

	public function index()
	{
		if($query = $this->pages_model->get_black()) {
			$data['black'] = $query;
		}
	 if($query = $this->pages_model->get_oolong()) {
			$data['oolong'] = $query;
		}
	 if($query = $this->pages_model->get_yellow()) {
			$data['yellow'] = $query;
		}
	 if($query = $this->pages_model->get_green()) {
			$data['green'] = $query;
		}
	 if($query = $this->pages_model->get_sample()) {
			$data['sample'] = $query;
		}
		if($query = $this->pages_model->cost()) {
			$data['cost'] = $query;
		}

		$tmpl = array('table_open' =>

		'<table cellpadding="5" cellspacing="5" class="tea_show">', 'row_start' =>

		'<tr class="cent">', 'row_alt_start' => '<tr class="cent">', 'table_close' => '</table>');

		$this->table->set_template($tmpl);
		$data['top'] = "tea and fermentation";
		$data['title'] = "Tea Page 1";
		$data['main_content'] = "pages/prime";
		$this->load->view("template/template", $data);
	}

	// public function display ()
	// {
	// 	if($query = $this->pages_model->get_type()) {
	// 		$data['mustang'] = $query;
	// 	}
	// 	if($q = $this->pages_model->get_all()) {
	// 		$data['single'] = $q;
	// 	}
	// 	$tmpl = array('table_open' =>

	// 	'<table cellpadding="5" cellspacing="5" class="tea_show">', 'row_start' =>

	// 	'<tr class="cent">', 'row_alt_start' => '<tr class="cent">', 'table_close' => '</table>');

	// 	$this->table->set_template($tmpl);
	// 	//$data['grumpy'] = "The Name";
	// 	$data['title'] = "Single Display";
	// 	$data['top'] = "Single Display";
	// 	$data['main_content'] = "pages/single";
	// 	$this->load->view("template/template", $data);

	// }

	public function singles ()
	{
		$tmpl = array('table_open' => '<table cellpadding="5" cellspacing="5" class="tea_show">', 'row_start' =>
		'<tr class="cent">', 'row_alt_start' => '<tr class="cent">', 'table_close' => '</table>');


		$inputs = $this->input->post("single");
		$this->db->select('rating, lastPurchase, orderedQty, total, cost');
		$this->db->where('teaName', $inputs);
		$q = $this->db->get('tea');
		if($q->result())
		{
			$data["mingle"] = $q->result();
		}
		$this->db->select('teaName, teaType, comment');
		$this->db->where('teaName', $inputs);
		$this->db->where('comment !=', "");
		$this->db->limit(1);
		$query = $this->db->get('tea');
		if($query->result())
		{
			$data["mustang"] = $query->result();
		}
		$this->table->set_template($tmpl);
		$data['title'] = "Single DIsplay";
		$data['top'] = "Single Display";
		$data['main_content'] = "pages/single";
		$this->load->view("template/template", $data);
	}

	public function teainput ()
	{
		$this->db->select('teaName');
		$this->db->where('comment >', "");
		$this->db->group_by("teaName");
		$query = $this->db->get('tea');
		if($query->result())
		{
			$data['commented'] = $query->result();
		}
		$data['top'] = "Tea Input";
		$data['title'] = "Tea Input";
		$data['main_content'] = "pages/tea_input";
		$this->load->view("template/template", $data);
	}

} //end

/* End of file pages.php */
