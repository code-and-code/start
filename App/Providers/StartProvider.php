<?php

namespace App\Providers;

use Cac\Provider\ServiceProvider;
use Cac\Route\Router;

class StartProvider extends ServiceProvider
{
    protected $namespace  = 'App\Controllers';

    public function boot()
    {
        $this->mapRoutes();
        $this->userRoutes();
        $this->adminRoutes();
    }

    public function mapRoutes()
    {
        Router::get(['route' => '/',      'namespace' => $this->namespace,'controller' => 'HomeController','action' => 'index']);
        Router::post(['route' => '/send', 'namespace' => $this->namespace,'controller' => 'HomeController','action' => 'send']);
    }

    /*
     * exemplo por arqui externo
     */
    public function userRoutes()
    {
        include __DIR__.'/../routes/user.php';
    }

    public function adminRoutes()
    {
        include __DIR__.'/../routes/admin.php';
    }
       
}
