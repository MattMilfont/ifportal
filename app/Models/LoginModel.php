<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function checkUser($userData){
        $query = $this->db->table('users')
                        ->where('email', $userData['email'])
                        ->get();

        $result = $query->getRowArray();
        if($result['password'] == $userData['password']){
            return $result;
        }else{
            return False;
        }
    }

}
