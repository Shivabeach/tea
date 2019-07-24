<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ferment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ferment_model');
	}

	public function index()
	{
		if($query = $this->ferment_model->get_ferment()) {
			$data['display'] = $query;
		}
		$data['title'] = "Fermentation Record";
		$data['top'] = "Fermentations";
		$data['main_content'] = "ferment/prime";
		$this->load->view("template/template", $data);
	}

	public function form()
	{
		$data['top'] = "Entry Form";
		$data['title'] = "Data Input";
		$data['main_content'] = "ferment/ferment_input";
		$this->load->view('template/template', $data);
	}

	public function notes()
	{
		if($query = $this->ferment_model->get_notes())
		{
			$data['notehead'] = $query;
		}
		$data['top'] = "Fermenting Notes";
		$data['title'] = "Process and Record";
		$data['main_content'] = "ferment/processing";
		$this->load->view('template/template', $data);
	}

	public function peppers()
	 {
	 	
	 	$data['top'] = "2019 pepper history";
		$data['title'] = "2019 pepper notes";
		$data['main_content'] = "ferment/peppers";
		$this->load->view('template/template', $data);
	 } 

}

/* End of file Ferment.php */
/* Location: ./application/controllers/Ferment.php */