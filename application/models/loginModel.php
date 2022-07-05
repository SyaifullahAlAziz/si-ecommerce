<?php defined('BASEPATH') or exit('No direct script access allowed');

class loginModel extends CI_Model
{

    public function cek_login($user, $pass)
    {
        $email_admin = $user;
        $password_admin = $pass;

        $query = $this->db->where('email_admin', $email_admin)->where('password_admin', $password_admin)->limit(1)->get('tb_admin');

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}
