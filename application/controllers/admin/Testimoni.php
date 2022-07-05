<?php

class Testimoni extends CI_Controller
{
    public function view()
    {
        $data['testimoni'] = $this->adminModel->get_testimoni();
        $this->load->view('layout_admin/header');
        $this->load->view('layout_admin/sidebar');
        $this->load->view('admin/testimoni/view', $data);
        $this->load->view('layout_admin/footer');
    }
}
