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
        new Mail(config('mail.contact'), "Essa pessoa quer ajudar, e-mail: {$email}", 'Ajuda Start', false);
        return back();
    }

}
