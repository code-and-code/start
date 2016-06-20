<?php
namespace App\Controllers;

class Auth extends \Cac\Auth\Auth
{

    public function __construct()
    {
        parent::__construct();
        $this->setConfig('auth.auth');
    }

    public function getLogin()
    {
       echo $this->maker('auth/login.phtml',true);
    }
}