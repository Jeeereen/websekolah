<?php

class Siswa extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_siswa');
		$data['siswa'] = $this->M_siswa->getAllsiswa();
		if ($this->input->post('keyword')) {
			$data['siswa'] = $this->M_siswa->cariDatasiswa();
		}
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header2', $data);
		$this->load->view('templates/sidebar2', $data);
		$this->load->view('templates/topbar2', $data);
		$this->load->view('admin/v_siswa', $data);
		$this->load->view('templates/footer2');
	}

	public function tambah_siswa()
	{
		$data['judul'] = 'Form Tambah Data siswa';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nisn', 'NISN', 'numeric|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/tambah_siswa', $data);
			$this->load->view('templates/footer2');
		} else {
			$this->M_siswa->tambahDatasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/siswa');
		}
	}

	public function hapus_siswa($id)
	{

		$this->M_siswa->hapusDatasiswa($id);
		$this->session->set_flashdata('flash', "Dihapus");
		redirect('admin/siswa');
	}

	public function ubah_siswa($id)
	{
		$data['judul'] = 'Form ubah Data Siswa';
		$data['siswa'] = $this->M_siswa->getSiswabyId($id);
		$data['kelas'] = ['MIA 1', 'MIA 2', 'MIA 3', 'MIA 4', 'MIA 5', 'MIA 6', 'IIS 1', 'IIS 2', 'IIS 3', 'IIS 4', 'IIS 5'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nisn', 'NISN', 'numeric|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/ubah_siswa', $data);
			$this->load->view('templates/footer2');
		} else {
			$this->M_siswa->ubahDatasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/siswa');
		}
	}
}
