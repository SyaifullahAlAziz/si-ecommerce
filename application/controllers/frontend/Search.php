<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

	public function index()
	{
		
		// Load view
		$this->load->view('frontend/search', [
			'parent' => false,
			'data' => [
				'keyword' => $this->input->get('keyword'),
				'result' => [
					'produk' => [],
					'toko' => []
				]
			],
		]);

	}
}
