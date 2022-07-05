<?php

class User extends CI_Controller
{
    public function view()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('backend/user/view');
        $this->load->view('template_admin/footer');
    }
}
