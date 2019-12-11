<?php

class M_siswa extends CI_Model{
	public function getAllsiswa()
	{
		return $this->db->get('siswa')->result_array();
	} 

	public function tambahDatasiswa()
	{
		$data = [
			"nama" 				=> $this->input->post('nama', true),
			"nisn"				=> $this->input->post('nisn', true),
			"alamat" 			=> $this->input->post('alamat', true),
			"tanggal_lahir" 	=> $this->input->post('tanggal_lahir', true),
			"kelas" 	=> $this->input->post('kelas', true)
		] ;
		$this->db->insert('siswa', $data);
		return TRUE;
	}

	public function hapusDatasiswa($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('siswa');
	}

	public function getSiswabyId($id)
	{
		return $this->db->get_where('siswa',['id' => $id])->row_array();
	}

	// public function getNamasiswa($siswa)
	// {
	// 	return $this->db->get_where('siswa',['nama' => $nama])->row_array();
	// }

	public function ubahDatasiswa()
	{
		$data = [
			"nama" 				=> $this->input->post('nama', true),
			"nisn"				=> $this->input->post('nisn', true),
			"alamat" 			=> $this->input->post('alamat', true),
			"tanggal_lahir" 	=> $this->input->post('tanggal_lahir', true),
			"kelas" 			=> $this->input->post('kelas', true)
		] ;
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('siswa', $data);
		
	}

	public function cariDatasiswa()
	{
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('kelas', $keyword);
		$this->db->or_like('nisn', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('tanggal_lahir', $keyword);
		return $this->db->get('siswa')->result_array();
	}
}