<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model
{

    public function cek_login($user, $pass)
    {
        $email = $user;
        $password = $pass;

        $query = $this->db->where('email', $email)->where('password', $password)->limit(1)->get('tb_member');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}
