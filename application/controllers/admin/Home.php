<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['admin'] = $this->adminModel->get_data('tb_member')->result();
        $data['pelapak'] = $this->adminModel->get_data('tb_pelapak')->result();
        $data['member'] = $this->adminModel->get_data('tb_member')->result();
        $data['kurir'] = $this->adminModel->get_data('tb_kurir')->result();
        $this->load->view('layout_admin/header');
        $this->load->view('layout_admin/sidebar');
        $this->load->view('admin/home', $data);
        $this->load->view('layout_admin/footer');
    }
}
