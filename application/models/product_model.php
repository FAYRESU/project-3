<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_model extends CI_Model
{
	public function getAll()
	{
		$sql = "SELECT * FROM producter";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	public function getAllv2()
	{
		$result = $this->db->get('producter')->result();
		return $result;
	}

	public function getByCode($cd)
	{
		$sql = "SELECT * FROM producter WHERE code='$cd'";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	public function getByCodev2($cd)
	{
		$this->db->where('code', $cd);
		$result = $this->db->get('producter')->result();
		return $result;
	}

	public function removeByCode($cd)
	{
		$sql = "DELETE FROM producter WHERE code='$cd'";
		$this->db->query($sql);
	}
}
