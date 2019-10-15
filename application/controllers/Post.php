<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_m');
    }

    public function index()
    {
        $this->mylib->view('post_v');
    }
    public function post()
    {
        $data =array(
            'artikel_nama' => $this->input->post('nama'),
            'artikel_judul' => $this->input->post('judul'),
            'artikel_isi' => $this->input->post('isi'),
            'artikel_tanggal' => $this->input->post('tanggal'),
            'artikel_img' => $this->input->post('img')
        );
        $this->artikel_m->artikel_post($data);
        redirect('home');
    }
}
