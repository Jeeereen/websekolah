<?php

class Pegawai extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_pegawai');
		$data['pegawai'] = $this->M_pegawai->getAllpegawai();
		if ($this->input->post('keyword')) {
			$data['pegawai'] = $this->M_pegawai->cariDatapegawai();
		}
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header2', $data);
		$this->load->view('templates/sidebar2', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('admin/v_pegawai', $data);
		$this->load->view('templates/footer2');
	}

	public function tambah_pegawai()
	{
		$data['judul'] = 'Form Tambah Data pegawai';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'NIP', 'numeric|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/tambah_pegawai', $data);
			$this->load->view('templates/footer2');
		} else {
			$this->M_pegawai->tambahDatapegawai();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/pegawai');
		}
	}

	public function hapus_pegawai($id)
	{

		$this->M_pegawai->hapusDatapegawai($id);
		$this->session->set_flashdata('flash', "Dihapus");
		redirect('admin/pegawai');
	}

	public function ubah_pegawai($id)
	{
		$data['judul'] = 'Form ubah Data pegawai';
		$data['pegawai'] = $this->M_pegawai->getPegawaibyId($id);
		$data['jenis_pekerjaan'] = ['SEKERTARIS', 'PERPUSTAKAAN', 'KEUANGAN'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nip', 'NIP', 'numeric|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/ubah_pegawai', $data);
			$this->load->view('templates/footer2');
		} else {
			$this->M_pegawai->ubahDatapegawai();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/pegawai');
		}
	}
}
