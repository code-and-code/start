<?php
namespace App\Controllers;


class Index extends \Cac\Auth\Auth
{

    public function index()
    {
        echo $this->render('index.index', ['message' => 'Welcome']);
    }

    public function contact()
    {
        echo $this->maker('index/contact.html',['contact' => 'Your page. Contact'],true);
    }
}