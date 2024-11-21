<?php

namespace App\Models;

use CodeIgniter\Model;

class SignInModel extends Model
{
    public function signIn($signinData)
    {
        $query = $this->insert('users', $signinData);
        if($query){
            return true;
        }else{
            return false;
        }
    }
}
