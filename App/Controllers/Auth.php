<?php
namespace App\Controllers;

class Auth extends \Cac\Auth\Auth
{

    public function __construct()
    {
        parent::__construct();
        $this->setConfig('auth');
    }

    public function store($array)
    {
        $user = new $this->class();
        $user->create($array);
        return true;
    }

}