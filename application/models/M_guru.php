<?php

class M_guru extends CI_Model{
	public function getAllguru()
	{
		return $this->db->get('guru')->result_array();
	} 

	public function tambahDataguru()
	{
		$data = [
			"nama" 				=> $this->input->post('nama', true),
			"nip"				=> $this->input->post('nip', true),
			"alamat" 			=> $this->input->post('alamat', true),
			"tanggal_lahir" 	=> $this->input->post('tanggal_lahir', true),
			"mata_pelajaran" 	=> $this->input->post('mata_pelajaran', true)
		] ;
		$this->db->insert('guru', $data);
		return TRUE;
	}

	public function hapusDataguru($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('guru');
	}

	public function getGurubyId($id)
	{
		return $this->db->get_where('guru',['id' => $id])->row_array();
	}

	public function ubahDataguru()
	{
		$data = [
			"nama" 				=> $this->input->post('nama', true),
			"nip"				=> $this->input->post('nip', true),
			"alamat" 			=> $this->input->post('alamat', true),
			"tanggal_lahir" 	=> $this->input->post('tanggal_lahir', true),
			"mata_pelajaran" 	=> $this->input->post('mata_pelajaran', true)
		] ;
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('guru', $data);
		
	}

	public function cariDataguru()
	{
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('mata_pelajaran', $keyword);
		$this->db->or_like('nip', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('tanggal_lahir', $keyword);
		return $this->db->get('guru')->result_array();
	}
}