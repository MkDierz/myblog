<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_m');
	}

	public function index()
	{
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('prodi', 'prodi', 'required');
		$this->form_validation->set_rules('fakultas', 'fakultas', 'required');
		if ($this->form_validation->run() == TRUE){
			$data = array(
				'mhs_nim' => $this->input->post('nim'),
				'mhs_nama' => $this->input->post('nama'),
				'mhs_prodi' => $this->input->post('prodi'),
				'mhs_fakultas' => $this->input->post('fakultas')
			);
			$this->Home_m->mhs_input($data);

			$this->session->set_flashdata('mhs_input', 'Selamat! data mahasiswa telah di simpan');

			redirect('home');
		}else{
			$this->mylib->view('home_v');
		}
		
	}

	public function tampil()
	{
		$data['title'] = 'Lain';
		$data['mahasiswa'] = $this->Home_m->tampil();
		$this->mylib->view('tampil_v',$data);
	}

	public function edit($nim)
	{
		$data['mahasiswa'] = $this->Home_m->get_where('tbl_mahasiswa',['mhs_nim' => $nim]);
		$this->load->view('template/header');
		$this->load->view('edit_v',$data);
		$this->load->view('template/footer');
	}

	public function edit_proses($nim)
	{
		$data = array(
			'mhs_nama' => $this->input->post('nama'),
			'mhs_prodi' => $this->input->post('prodi'),
			'mhs_fakultas' => $this->input->post('fakultas')
		);

		$this->db->update('tbl_mahasiswa',$data,['mhs_nim' => $nim]);
		redirect('home/tampil');
	}

	public function hapus($nim)
	{
		$this->db->delete('tbl_mahasiswa',['mhs_nim' => $nim]);
		redirect('home/tampil');
	}

}
