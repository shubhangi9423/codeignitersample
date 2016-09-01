<?php

class Model extends CI_Model
{
	public function _construct()
	{
		parent::_construct();
	}
	public function getdata()
	{
		$query=$this->db->get('user');
		return $query->result();
	}
}
?>