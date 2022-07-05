<?php

class Login extends CI_Controller
{
    public function index()
    {
        if (!empty($this->session->userdata('email'))) {
            redirect('user/home'); // Sudah Login
		} else {
			$this->load->view('user/login'); // Belum Login
		}
    }

    public function aksiLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek = $this->loginModel->cek_login($email, $password);
        $this->session->set_userdata('id_member', $cek->id_member);

        if ($cek == FALSE) {
            $this->session->set_flashdata('error', 'Email / Password Salah');
            redirect('user/login');
        } else {
            $this->session->set_userdata('email', $cek->email);
            $this->session->set_userdata('nama_lengkap', $cek->nama_lengkap);
            $this->session->set_flashdata('pesan', 'Login Berhasil');
            redirect('user/home');
        }
    }

    public function aksiLogout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function register()
    {
        $this->load->view('user/register');
    }
}
