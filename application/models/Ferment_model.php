<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ferment_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}
		// start, peppers(weight), salt(used), mix(what peppers), success, days(length)
	public function get_ferment ()
	{
		$config = [
		'table_open' =>'<table cellpadding="5" cellspacing="5" class="tea_show">',
		'row_start' => '<tr class="cent">', 'row_alt_start' => '<tr class="cent">',
		'table_close' => '</table>'
		];
		$this->table->set_template($config);
		$this->db->select('numb, start, peppers, mix, success, days, ph');
		$this->db->order_by("numb", "desc");
		$query = $this->db->get('ferment');
		return $query->result();
	}

	public function update()
	{
		$number = $this->uri->segment(3);
		$this->db->select("numb, success, days");
		$this->db->where("numb", $number);
	}

	public function get_notes()
	{
		$this->db->select('date, note, recording');
		$this->db->order_by('date', 'desc');
		$query = $this->db->get('notes');
		return $query->result();
	}

	public function ave()
	{
		$this->db->select_avg("days");
		$this->db->where("days >", 1);
		$this->db->where("success", "yes");
		$query = $this->db->get("ferment");
		return $query->result();
	}

	public function acidity()
	{
		$this->db->select_avg("ph");
		$this->db->where("ph >", 1);
		$this->db->where("success", "yes");
		$query = $this->db->get("ferment");
		return $query->result();
	}
	public function sums()
	{
		$this->db->select_sum("peppers");
		$this->db->where("success", "Yes");
		$query = $this->db->get("ferment");
		return $query->result();
	}

}

/* End of file Ferment_model.php */
/* Location: ./application/models/Ferment_model.php */
