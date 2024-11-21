<?php

namespace App\Controllers;

use App\Models\SignInModel;

// use App\Models\SigninModel;

class SignIn extends BaseController
{
    protected $signinModel;

    public function __consturct(){
        $this->signinModel = new SignInModel();
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
