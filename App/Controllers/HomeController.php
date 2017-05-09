<?php
namespace App\Controllers;

use Cac\Controller\Action;

class HomeController extends Action
{
    public function index()
    {
        echo $this->render('home.index', []);
    }

    public function contact()
    {
        echo $this->render('home.contact', ['contact' => 'Pagina Contato']);
    }

}
