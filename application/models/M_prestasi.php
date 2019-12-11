<?php

class M_prestasi extends CI_Model{
	public function getAllprestasi()
	{
		return $this->db->get('prestasi')->result_array();
	} 

	public function tambahDataprestasi()
	{
		$data = [ 
			"nama" => $this->input->post('nama', true),
			"prestasi" => $this->input->post('prestasi',true)];
		$this->db->insert('prestasi', $data);
		return TRUE;
	}

	public function getSiswabyName($nama){
		return $this->db->get_where('siswa',['nama' => $nama])->row_array();
	}

	public function hapusDataprestasi($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('prestasi');
	}

	public function getPrestasibyId($id)
	{
		return $this->db->get_where('prestasi',['id' => $id])->row_array();
	}

	public function ubahDataprestasi()
	{
		$data = [ 
			"nama" => $this->input->post('nama', true),
			"prestasi" => $this->input->post('prestasi',true)];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('prestasi', $data);
		
	}

	public function cariDataprestasi()
	{
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('prestasi', $keyword);
		return $this->db->get('prestasi')->result_array();
	}
}