<?php
namespace App\Controllers;

class Auth extends \Cac\Auth\Auth
{

    protected $class        = 'App\Models\User';
    protected $viewLogin    = 'login';
    protected $viewRegister ='register';
    protected $columns      = ['email','password'];


    public function store($array)
    {
        $user = new $this->class();
        $user->create($array);
        return true;
    }

}