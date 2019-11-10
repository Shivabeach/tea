<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
  }

	public function tearecorder()
	{
		$data = [
			"teaName"      => trim($this->input->post("teaName")),
			"teaType"      => trim($this->input->post("teaType")),
			"buyAgain"     => trim($this->input->post("buyAgain")),
			"lastPurchase" => trim($this->input->post("lastPurchase")),
			"cost"         => trim($this->input->post("cost")),
			"amount"       => trim($this->input->post("amount")),
			"orderedQty"   => trim($this->input->post("orderedQty")),
			"comment"      => trim($this->input->post("comment")),
			"total"        => $this->input->post("cost") * $this->input->post("amount")
		];

		$this->form_validation->set_rules('teaName', 'teaname', 'required|min_length[6]');
		$this->form_validation->set_rules('teaType', 'teaType', 'required|min_length[4]');
		$this->form_validation->set_rules('buyAgain', 'buyAgain', 'required|min_length[2]');
		$this->form_validation->set_rules('lastPurchase', 'lastPurchase', 'required');
		$this->form_validation->set_rules('cost', 'cost', 'required|numeric');
		$this->form_validation->set_rules('amount', 'amount', 'required');
		$this->form_validation->set_rules('orderedQty', 'orderedQty', 'required');
		$this->form_validation->set_rules('comment', 'comment', 'min_length[10]');

		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else {
			$this->db->insert("tea", $data);
			$teaname = $this->input->post("teaName");
			echo $teaname . " is in";
		}
	}
	// start, peppers(weight), salt(used), mix(what peppers), success, days(length)
	public function ferm()
	{
		$data = [
			"numb"    => $this->input->post("numb"),
			"start"   => $this->input->post("start"),
			"peppers" => $this->input->post("peppers"),
			"salt"    => $this->input->post("salt"),
			"mix"     => $this->input->post("mix")
		];

		$this->form_validation->set_rules('start', 'startdate', 'required');
		$this->form_validation->set_rules('peppers', 'peppers', 'required');
		$this->form_validation->set_rules('salt', 'salt', 'required');
		$this->form_validation->set_rules('mix', 'mix', 'required');
		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else {
			$this->db->insert("ferment", $data);
			$peppers = $this->input->post("peppers");
			echo $peppers . " is in";
		}
	}

	public function update()
	{
		$number = $this->uri->segment(3);
		$this->db->select("numb, success, days");
		$this->db->where("numb", $number);
		$query = $this->db->get('ferment');
		if($query->result())
		{
			$data['ups'] = $query->result();
		}
		$this->load->view("ferment/update", $data);
	}

	public function insert()
	{
		$mix     = $this->input->post('mix');
		$number  = $this->input->post('numb');
		$success = $this->input->post('success');
		$days    = $this->input->post('days');
		$ph      = $this->input->post('ph');
		$this->db->set('mix', $mix);
		$this->db->set('success', $success);
		$this->db->set('days', $days);
		$this->db->set('ph', $ph);
		$this->db->where('numb', $number);
		$this->db->update('ferment');
	}

	public function notes()
	{
		$data = [
			'date'      => $this->input->post('date'),
			'note'      => $this->input->post('note'),
			'recording' => $this->input->post('recording')
		];
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('note', 'Notes', 'required');
		$this->form_validation->set_rules('recording', 'Data', 'required');
		if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else {
			$this->db->insert("notes", $data);
			$notes = $this->input->post("note");
			echo $notes . " is in";
		}
	}

	public function entry()
  {
    $data = [
      'date' => $this->input->post('date'),
      'data' => $this->input->post('data')
    ];

    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('data', 'Data', 'required|trim');
    if( $this->form_validation->run() == FALSE) {
            echo validation_errors();
        }else
        {
            $this->db->insert('main', $data);
            echo "grand shit";
        }
  }

}

/* End of file Controllername.php */
