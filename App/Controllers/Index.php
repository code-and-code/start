<?php
namespace App\Controllers;

use Cac\Controller\Action;

class Index extends Action
{
    public function index()
    {
        echo $this->render('index.index', ['message' => 'Welcome']);
    }

    public function contact()
    {
        echo $this->maker('index/contact.html', ['contact' => 'Your page. Contact'], true);
    }

}
