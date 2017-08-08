<?php
namespace App\Controllers;

use Cac\Controller\Action;
use Cac\Support\Mail;

class HomeController extends Action
{
    public function index()
    {
        echo $this->render('home.index', []);
    }

    public function send()
    {
        $email = $_POST['email'];
        new Mail(['contato@codeandcode.com.br' => 'Start'], "Essa pessoa quer ajuda, e-mail: {$email}", 'Ajuda Start', false);
        return back();
    }

}
