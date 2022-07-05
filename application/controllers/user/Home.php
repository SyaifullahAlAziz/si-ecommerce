<?php

class Home extends CI_Controller
{
	public function index()
	{
		// if (!empty($this->session->userdata('user'))) {
		// 	$this->load->view('user/home'); // Sudah Login
		// } else {
		// 	redirect('user/login'); // Belom Login
		// }
		$this->load->view('user/pages/home'); // Sudah Login

	}
}
