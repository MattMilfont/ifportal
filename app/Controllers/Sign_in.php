<?php

namespace App\Controllers;

use App\Models\SigninModel;

// use App\Models\SigninModel;

class Signin extends BaseController
{
    protected $signinModel;

    public function __consturct(){
        $this->signinModel = new SigninModel();
    }

    public function index()
    {
        echo 'Login';
    }

    public function signinPost()
    {
        $signinData = $this->request->getJSON(TRUE);

        $return = $this->signinModel->signIn($signinData);

        return $return;
    }
    
}
