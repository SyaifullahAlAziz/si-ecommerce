<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

	public function index()
	{
		// Load view
		$this->load->view('tokos', [
			'parent' => 'toko',
		]);
	}
}
