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
        $this->load->view('templates_utama/header');
        $this->load->view('utama/v_guru', $data);
        $this->load->view('templates_utama/footer');
    }
}
