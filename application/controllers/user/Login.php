<?php

class Login extends CI_Controller
{
    public function index()
    {
        if (!empty($this->session->userdata('user'))) {
            redirect('user/home'); // Sudah Login
		} else {
			$this->load->view('user/login'); // Belum Login
		}
    }

    public function aksiLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

		$this->load->model('loginModel');

        $cek = $this->loginModel->cek_login($email, $password);

        if ($cek == FALSE) {
            $this->session->set_flashdata('error', 'Email / Password Salah');
            redirect('user/login');
        } else {
            $this->session->set_userdata('user', $cek);
            redirect('user/home');
        }
    }

    public function aksiLogout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
    }

    public function register()
    {

		// Load model
		$this->load->model('wilayahModel');

        $this->load->view('user/register', [
			'wilayah' => $this->wilayahModel->all()
		]);
    }
}
