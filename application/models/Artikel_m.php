<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_m extends CI_Model
{

    // INSERT
    public function post($data)
    {
        $this->db->insert('artikel', $data);
    }

    // READ
    public function artikel_tampil()
    {
        return $this->db->get('artikel');
    }

    public function get_where($tbl, $where)
    {
        $this->db->where($where);
        return $this->db->get($tbl);
    }
}
