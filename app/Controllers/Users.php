<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $usersModel;

    public function __construct(){
        $this->usersModel = new UsersModel();
    }

    public function getUser()
    {
        $requestData = $this->request->getGet();

        $return = $this->usersModel->getUser($requestData);

        return json_encode($return);
    }
    public function getAllUsers()
    {
        return $this->response->setJSON(['status' => 'success', 'message' => 'Test response']);
    }
}
