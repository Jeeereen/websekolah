<?php

class Dashboard2 extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Halaman Admin SMAN 6 Luwu';
        $this->load->view('templates/header2', $data);
        $this->load->view('templates/sidebar2', $data);
        $this->load->view('templates/topbar2', $data);
        $this->load->view('admin/dashboard2', $data);
        $this->load->view('templates/footer2');
    }
}
