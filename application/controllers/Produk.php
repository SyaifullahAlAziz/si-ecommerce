<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function index()
	{
		// Load Model
		$this->load->model('produkModel');

		// Load view
		$this->load->view('produks', [
			'parent' => 'produk',
			'terlaris' => $this->produkModel->terlaris(),
			'semua' => $this->produkModel->all()
		]);
	}
}
