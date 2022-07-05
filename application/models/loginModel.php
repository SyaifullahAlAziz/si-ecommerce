<?php defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{

    public function cek_login($user, $pass)
    {
        $email = $user;
        $password = $pass;

        $query = $this->db->where('email', $email)->where('password', $password)->limit(1)->get('tb_member');

		// tb_admin
		// tb_member
		// tb_pelapak
		


        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}
