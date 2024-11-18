<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function checkUser($userData)
    {
        $this->where('email', $userData['email']);
        $this->where('password', $userData['password']);
        $query = $this->get('users');
        $result = $query->result_array();
        if(count($result) > 0){
            return $result;
        }else{
            return FALSE;
        }
    }
}
