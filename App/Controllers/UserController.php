<?php
namespace App\Controllers;

use App\Models\User;
use Cac\Controller\Action;
use Cac\Support\Cache;

class UserController extends Action
{
    private $user;

    public function __construct()
    {
        $this->user = auth();
    }

    public function index()
    {
        echo $this->render('user.index');
    }

    public function edit()
    {
        echo $this->render('user.edit');
    }

    public function update()
    {

    }
}