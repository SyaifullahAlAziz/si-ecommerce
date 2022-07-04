<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('backend/home');
        $this->load->view('template_admin/footer');
    }
}
