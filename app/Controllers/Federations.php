<?php

namespace App\Controllers;

class Federations extends BaseController
{
    protected $federationsModel;

    public function __construct(){
        $this->federationsModel = new FederationsModel();
    }
}