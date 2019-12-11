<?php

class M_berita extends CI_Model{
	public function getAllberita()
	{
		return $this->db->get('berita')->result_array();
	} 

	public function tambahDataberita()
	{
		$data = [
			"judul_berita" 	=> $this->input->post('judul_berita', true),
			"isi_berita" 	=> $this->input->post('isi_berita', true)
		] ;
		$this->db->insert('berita', $data);
		return TRUE;
	}

	public function hapusDataberita($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('berita');
	}

	public function getberitabyId($id)
	{
		return $this->db->get_where('berita',['id' => $id])->row_array();
	}

	public function ubahDataberita()
	{
		$data = [
			"judul_berita" 	=> $this->input->post('judul_berita', true),
			"isi_berita" 	=> $this->input->post('isi_berita', true)
		] ;
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('berita', $data);
		
	}

	public function cariDataberita()
	{
		$keyword = $this->input->post('keyword',true);
		$this->db->like('judul_berita', $keyword);
		$this->db->or_like('isi_berita', $keyword);
		return $this->db->get('berita')->result_array();
	}
}