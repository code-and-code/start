<?php
namespace App\Controllers;

use Cac\Controller\Action;

class Admin extends Action
{
    public function index()
    {
        echo $this->render('admin.index');
    }
}