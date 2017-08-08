<?php
namespace App\Controllers\Auth;

use Cac\Auth\Authentication\Authenticate;

class AuthController extends Authenticate
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