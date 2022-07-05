<?php

class adminModel extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_toko()
    {
        return $this->db->query("SELECT * FROM tb_toko JOIN tb_pelapak 
        ON tb_toko.id_pelapak=tb_pelapak.id_pelapak ORDER BY id_toko DESC")->result();
    }

    public function get_testimoni()
    {
        return $this->db->query("SELECT * FROM tb_testimoni 
        JOIN tb_member ON tb_testimoni.id_member=tb_member.id_member
        JOIN tb_produk ON tb_testimoni.id_produk=tb_produk.id_produk")->result();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function ambil_id($id)
    {
        $hasil = $this->db->where('id_admin', $id)->get('tb_admin');

        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
