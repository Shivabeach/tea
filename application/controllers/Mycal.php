<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mycal extends CI_Controller {
    public function index()
    {
    }
    public function display($year = null, $month = null) {
        if (!$year) {
        $year = date('Y');
    }
    if (!$month) {
        $month = date('m');
    }
    $this->load->model('mycal_model');
    if ($day = $this->input->post('day')) {
        $this->mycal_model->add_calendar_data("$year-$month-$day", $this->input->post('data')
        );
    }
    $data['title'] = 'Tea & Fermentation Calendar';
    $data['calendar'] = $this->mycal_model->generate($year, $month);
    $data['top'] = "tea and fermentation calendar";
    $data['main_content'] = "ferment/calendar";
    $this->load->view('template/template', $data);
  }
}
/* End of file mycal.php */
/* Location: ./application/controllers/mycal.php */