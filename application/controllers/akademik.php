<?php

class Akademik extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_prestasi');
        $data['prestasi'] = $this->M_prestasi->getAllprestasi();
        if ($this->input->post('keyword')) {
            $data['prestasi'] = $this->M_prestasi->cariDataprestasi();
        }
        //  $data['siswa'] = $this->M_prestasi->getSiswabyName($nama);

        $this->load->view('templates_utama/header');
        $this->load->view('utama/v_akademik', $data);
        $this->load->view('templates_utama/footer');
    }
}
