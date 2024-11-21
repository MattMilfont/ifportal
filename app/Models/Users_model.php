<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function getUser($userData)
    {
        $this->where('id', $userData['id']);
        $query = $this->get('users');
        return $query->row_array();
    }
    public function getAllUsers()
    {
        // return "ok";
        $query = $this->findAll();
        return $query;
    }
}
