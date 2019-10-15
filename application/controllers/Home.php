<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_m');
    }

    public function index()
    {
        $data['artikel']=$this->Artikel_m->Artikel_tampil();
        $this->mylib->view('home_v', $data);
    }
}
