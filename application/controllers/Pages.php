<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
		$tmpl = array('table_open' =>

		'<table cellpadding="5" cellspacing="5" class="tea_show">', 'row_start' =>

		'<tr class="cent">', 'row_alt_start' => '<tr class="cent">', 'table_close' => '</table>');

		$this->table->set_template($tmpl);
		$data['top'] = "tea page";
		$data['title'] = "Tea Page 1";
		$data['main_content'] = "pages/prime";
		$this->load->view("template/template", $data);
	}

	public function display ()
	{
		$name = $this->uri->segment(3);
		$this->db->where('teaName', $name);
		$this->db->select('teaName, teaType, comment,rating,lastPurchase,orderedQty, total');
		$data['name'] = $this->db->select('teaName');
		$query = $this->db->get('tea');
		$data['single'] = $query->result();

	}


}

/* End of file Controllername.php */



