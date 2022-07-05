<?php defined('BASEPATH') or exit('No direct script access allowed');

class WilayahModel extends CI_Model
{

	public function all()
	{
		$res = $this->db
					->from('tb_kota')
					->join(
						'tb_provinsi',
						'tb_provinsi.id_provinsi = tb_kota.id_provinsi',
						'left'
					)
					->get()
					->result_array();

		$data = [];
		foreach ($res as $key => $val) {
			$data[$val['id_provinsi']]['name'] = $val['nama_provinsi'];
			$data[$val['id_provinsi']]['kota'][$val['id_kota']] = $val['nama_kota'];
		}
		
		return $data;
	}
}
