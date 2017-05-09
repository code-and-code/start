<?php
namespace App\Controllers;

use App\Models\User;
use Cac\Controller\Action;
use Cac\Support\Cache;

class Admin extends Action
{
    private $user;

    public function __construct()
    {
        $this->user = new User;
    }

    public function index()
    {
        echo $this->render('admin.index');
    }
}