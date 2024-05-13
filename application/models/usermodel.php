<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    public function reisterUser($data)
    {
        $this->db->insert('user', $data);

        if ($this->db->affected_rows() > 0) {
            $response = 'User registered successfully';
        } else {
            $response = 'Failed to register user';
        }

        return $response;
    }

    public function loginUser($email,$password)
    {
        $this->db->select("email, password");
        $this->db->from("user");
        $this->db->where("email", $password);

        $query = $this->db->get();

        if (($email == $query->result('email')) && ($password == $query->result('password')) ) {
            return array('success' => true);
        } else {
            return array('success' => false);
        }
        
    }
}
