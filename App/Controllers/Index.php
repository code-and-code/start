<?php
namespace App\Controllers;

use Cac\Controller\BaseController;

class Index extends  BaseController
{
    public function index()
    {
        $this->render('index',['name' => '{CodeAndCode}']);
    }

    public function contact()
    {
        echo $this->maker('index/contact.html',['contact' => 'Your page. Contact'],true);
    }


}