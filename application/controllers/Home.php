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

    public function delete($id)
    {
        $this->db->delete('artikel', ['artikel_id' => $id]);
        redirect('home');
    }
    public function edit($id)
    {
        $data['artikel'] = $this->Artikel_m->get_where('artikel', ['artikel_id' => $id]);
        $this->mylib->view('edit_v', $data);
    }

    public function edit_act($id)
    {
        #
        $data =array(
            'artikel_nama' => $this->input->post('nama'),
            'artikel_judul' => $this->input->post('judul'),
            'artikel_isi' => $this->input->post('isi'),
            'artikel_tanggal' => $this->input->post('tanggal'),
            'artikel_img' => $this->input->post('img')
        );
        $this->db->update('artikel', $data, ['artikel_id' => $id]);
        redirect('home');
    }
}
