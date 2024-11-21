<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    protected $newsModel;

    public function __construct(){
        $this->newsModel = new NewsModel();
    }

    public function index()
    {
        return view('');
    }

    public function getAllNews(){
        $return = $this->newsModel->getAllNews();
        if(count($return) != 0){
            return $this->response->setJSON($return);
        }else{
            return $this->response->setJSON(['error' => 'Não há nenhuma notícia']);
        }
    }
}
