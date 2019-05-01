<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['top'] = "tea page";
		$data['title'] = "Tea Page 1";
		$data['main_content'] = "pages/prime";
		$this->load->view("template/template", $data);
	}

}

/* End of file Controllername.php */



