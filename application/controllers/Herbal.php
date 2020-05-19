<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Herbal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['top'] = "Herbal Needs";
		$data['title'] = "Herbal Needs";
		$data['main_content'] = "pages/herbal.html";
		$this->load->view("template/template", $data);
  }

}
