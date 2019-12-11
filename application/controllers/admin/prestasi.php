<?php

class Prestasi extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_prestasi');
		$data['prestasi'] = $this->M_prestasi->getAllprestasi();
		if ($this->input->post('keyword')) {
			$data['prestasi'] = $this->M_prestasi->cariDataprestasi();
		}
		//  $data['siswa'] = $this->M_prestasi->getSiswabyName($nama);

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header2', $data);
		$this->load->view('templates/sidebar2', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('admin/v_prestasi', $data);
		$this->load->view('templates/footer2');
	}

	public function tambah_prestasi()
	{
		$data['judul'] = 'Form Tambah Data Prestasi';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/tambah_prestasi', $data);
			$this->load->view('templates/footer2');
		} else {
			$this->M_prestasi->tambahDataprestasi();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/prestasi');
		}
	}

	public function hapus_prestasi($id)
	{

		$this->M_prestasi->hapusDataprestasi($id);
		$this->session->set_flashdata('flash', "Dihapus");
		redirect('admin/prestasi');
	}

	public function ubah_prestasi($id)
	{
		$data['judul'] = 'Form ubah Data prestasi';
		$data['prestasi'] = $this->M_prestasi->getPrestasibyId($id);

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/ubah_prestasi', $data);
			$this->load->view('templates/footer2');
		} else {
			$this->M_prestasi->ubahDataprestasi();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/prestasi');
		}
	}
}
