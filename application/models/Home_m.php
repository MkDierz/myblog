<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	// INSERT
	public function mhs_input($data)
	{
		$this->db->insert('tbl_mahasiswa', $data);
	}

	// READ
	public function tampil()
	{
		return $this->db->get('tbl_mahasiswa');
	}

	public function get_where($tbl,$where)
	{
		$this->db->where($where);
		return $this->db->get($tbl);
	}

}