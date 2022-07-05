<?php

class User extends CI_Controller
{
    public function view()
    {
        $data['user'] = $this->adminModel->get_data('tb_member')->result();
        $this->load->view('layout_admin/header');
        $this->load->view('layout_admin/sidebar');
        $this->load->view('admin/user/view', $data);
        $this->load->view('layout_admin/footer');
    }
}
