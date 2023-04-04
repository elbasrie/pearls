<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/footer');
	}

	public function pengguna()
	{
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/pengaturan/pengguna');
		$this->load->view('dashboard/footer');
	}
}
