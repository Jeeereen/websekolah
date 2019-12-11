<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{

		$this->load->view('utama/v_home');
		$this->load->view('templates_utama/header');
		$this->load->view('templates_utama/footer');
	}
}
