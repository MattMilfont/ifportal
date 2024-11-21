<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    public function getAllNews(){
        $query = $this->db->table('news')
                          ->get();
        return $query->getResultArray();
    }
}