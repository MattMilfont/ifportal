<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $loginModel;

    public function __construct(){
        $this->loginModel = new LoginModel();
    }

    public function index()
    {
        echo 'Login';
    }

    public function loginPost()
    {
        $userData = $this->request->getJSON(TRUE);
        $return = $this->loginModel->checkUser($userData);

        if($return != false){
            return $this->response->setJSON($return);
        }else{
            return $this->response->setJSON(['error' => 'Usuário não encontrado']);
        }
    }
    
}
