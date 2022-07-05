<?php

class Home extends CI_Controller
{
    public function index()
    {
		if (!empty($this->session->userdata('email'))) {
			$this->load->view('user/home'); // Sudah Login
		} else {
            redirect('user/login'); // Belom Login
		}
    }
}
