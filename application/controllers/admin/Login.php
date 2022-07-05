<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/login');
    }

    public function loginView()
    {
        if (!empty($this->session->userdata('email_admin'))) {
            redirect('admin/login');
        } else {
            redirect('admin/home');
        }
    }

    public function aksiLogin()
    {
        $this->load->model('loginModel');
        $email = $this->input->post('email_admin');
        $password = $this->input->post('password_admin');

        $cek = $this->loginModel->cek_login($email, $password);
        $this->session->set_userdata('id_admin', $cek->id_admin);

        if ($cek == FALSE) {
            $this->session->set_flashdata('error', 'email_admin / Password_admin Salah');
            redirect('admin/login');
        } else {
            $this->session->set_userdata('email_admin', $cek->email_admin);
            $this->session->set_userdata('nama_admin', $cek->nama_admin);
            $this->session->set_flashdata('pesan', 'Login Berhasil');
            redirect('admin/home');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    public function register()
    {
        $this->load->view('admin/register');
    }
}
