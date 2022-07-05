<?php

class Store extends CI_Controller
{
    public function view()
    {
        $data['store'] = $this->adminModel->get_toko();
        $this->load->view('layout_admin/header');
        $this->load->view('layout_admin/sidebar');
        $this->load->view('admin/store/view', $data);
        $this->load->view('layout_admin/footer');
    }
}
