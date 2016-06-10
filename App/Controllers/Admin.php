<?php
namespace App\Controllers;

use Cac\Controller\BaseController;

class Admin extends  BaseController
{
    public function index()
    {
        $this->render('index',['email' => auth('email')]);
    }
}