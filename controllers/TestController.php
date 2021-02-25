<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function loginTest()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    
    public function logoutTest()
    {
        return $this->render('logout');
    }
}
