<?php
namespace App\Controllers\Auth;

use Cac\Auth\Auth;

class AuthController extends Auth
{
    public function __construct()
    {
        $this->setConfig('auth.auth');
    }

    public function getLogin()
    {
       echo $this->render('auth.login');
    }

    public function getRegister()
    {
        echo $this->render('auth.register');
    }
}