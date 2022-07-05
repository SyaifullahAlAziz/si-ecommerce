<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

	public function index()
	{
		// Load Model
		$this->load->model('tokoModel');

		// Load view
		$this->load->view('tokos', [
			'parent' => 'toko',
			'semua' => $this->tokoModel->all()
		]);
	}
}
