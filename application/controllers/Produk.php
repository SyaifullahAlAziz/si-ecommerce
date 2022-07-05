<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function index()
	{
		// Load view
		$this->load->view('produks', [
			'parent' => 'produk',
		]);
	}
}
