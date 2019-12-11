<?php

class M_pegawai extends CI_Model{
	public function getAllpegawai()
	{
		return $this->db->get('pegawai')->result_array();
	} 

	public function tambahDatapegawai()
	{
		$data = [
			"nama" 				=> $this->input->post('nama', true),
			"nip"				=> $this->input->post('nip', true),
			"alamat" 			=> $this->input->post('alamat', true),
			"tanggal_lahir" 	=> $this->input->post('tanggal_lahir', true),
			"jenis_pekerjaan" 	=> $this->input->post('jenis_pekerjaan', true)
		] ;
		$this->db->insert('pegawai', $data);
		return TRUE;
	}

	public function hapusDatapegawai($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pegawai');
	}

	public function getPegawaibyId($id)
	{
		return $this->db->get_where('pegawai',['id' => $id])->row_array();
	}

	public function ubahDatapegawai()
	{
		$data = [
			"nama" 				=> $this->input->post('nama', true),
			"nip"				=> $this->input->post('nip', true),
			"alamat" 			=> $this->input->post('alamat', true),
			"tanggal_lahir" 	=> $this->input->post('tanggal_lahir', true),
			"jenis_pekerjaan" 	=> $this->input->post('jenis_pekerjaan', true)
		] ;
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pegawai', $data);
		
	}

	public function cariDatapegawai()
	{
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('jenis_pekerjaan', $keyword);
		$this->db->or_like('nip', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('tanggal_lahir', $keyword);
		return $this->db->get('pegawai')->result_array();
	}
}