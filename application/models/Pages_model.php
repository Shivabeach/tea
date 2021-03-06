<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$name = $this->input->post('single');

	}

	public function get_black()
	{
		$black = "Black";
		$this->db->select("id, teaName, link, lastPurchase, rating");
		$this->db->where("cost >", 1);
		$this->db->where("teaType", $black);
		$this->db->group_by("teaname");
		$query = $this->db->get("tea");
		return $query->result();

	}
	public function get_oolong()
	{
		$oolong = "Oolong";
		$this->db->select("id, teaName, link, lastPurchase, rating");
		$this->db->where("cost >", 1);
		$this->db->where("teaType", $oolong);
		$this->db->group_by("teaName");
		$query = $this->db->get("tea");
		return $query->result();

	}
	public function get_yellow()
	{
		$yellow = "Yellow";
		$this->db->select("id, teaName, link, lastPurchase, rating");
		$this->db->where("cost >", 1);
		$this->db->where("teaType", $yellow);
		$this->db->group_by("teaname");
		$query = $this->db->get("tea");
		return $query->result();
	}
	public function get_green()
	{
		$green = "Green";
		$this->db->select("id, teaName, link, lastPurchase, rating");
		$this->db->where("cost >", 1);
		$this->db->where("teaType", $green);
		$this->db->group_by("teaname");
		$query = $this->db->get("tea");
		return $query->result();

	}
	public function get_sample()
	{
		$sample = 1;
		$this->db->select("teaName, teaType, buyAgain");
		$this->db->where("orderedQty", 0);
		$query = $this->db->get("tea");
		return $query->result();

	}

	public function get_type ()
	{
		$this->db->select('teaName, teaType, comment');
		$this->db->where('teaName', $name);
		$this->db->where('comment !=', "");
		$this->db->limit(1);
		$query = $this->db->get('tea');
		return $query->result();
	}

	public function get_all ()
	{
		$this->db->select('rating, lastPurchase, orderedQty, total');
		$this->db->where('teaName', $name);
		$q = $this->db->get('tea');
		return $q->result();
	}

	public function cost()
	{
		$this->db->select_sum("cost");
		$query = $this->db->get("tea");
		return $query->result();
	}

}

/* End of file Pages_model.php */
