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
        $this->load->view('templates_utama/header');
        $this->load->view('utama/v_pegawai', $data);
        $this->load->view('templates_utama/footer');
    }
}
