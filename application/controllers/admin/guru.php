 <?php

	class Guru extends CI_Controller
	{
		public function index()
		{
			$this->load->model('M_guru');
			$data['guru'] = $this->M_guru->getAllguru();
			if ($this->input->post('keyword')) {
				$data['guru'] = $this->M_guru->cariDataguru();
			}
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/header2', $data);
			$this->load->view('templates/sidebar2', $data);
			$this->load->view('templates/topbar2', $data);
			$this->load->view('admin/v_guru', $data);
			$this->load->view('templates/footer2');
		}

		public function tambah_guru()
		{
			$data['judul'] = 'Form Tambah Data Guru';

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nip', 'NIP', 'numeric|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
				$this->load->view('templates/header2', $data);
				$this->load->view('templates/sidebar2', $data);
				$this->load->view('templates/topbar2', $data);
				$this->load->view('admin/tambah_guru');
				$this->load->view('templates/footer2');
			} else {
				$this->M_guru->tambahDataguru();
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('admin/guru');
			}
		}

		public function hapus_guru($id)
		{

			$this->M_guru->hapusDataguru($id);
			$this->session->set_flashdata('flash', "Dihapus");
			redirect('admin/guru');
		}

		public function ubah_guru($id)
		{
			$data['judul'] = 'Form ubah Data Guru';
			$data['guru'] = $this->M_guru->getGurubyId($id);
			$data['matapelajaran'] = ['MATEMATIKA', 'FISIKA', 'KIMIA', 'BIOLOGI', 'BAHASA INDONESIA', 'BAHASA INGGRIS', 'SEJARAH', 'AGAMA', 'GEOLOGI', 'EKONOMI', 'SENI BUDAYA'];

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nip', 'NIP', 'numeric|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
				$this->load->view('templates/header2', $data);
				$this->load->view('templates/sidebar2', $data);
				$this->load->view('templates/topbar2', $data);
				$this->load->view('admin/ubah_guru', $data);
				$this->load->view('templates/footer2');
			} else {
				$this->M_guru->ubahDataguru();
				$this->session->set_flashdata('flash', 'Diubah');
				redirect('admin/guru');
			}
		}
	}
