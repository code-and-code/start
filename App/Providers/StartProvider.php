<?php

namespace App\Providers;

use Cac\Provider\ServiceProvider;
use Cac\Route\Router;

class StartProvider extends  ServiceProvider
{
    protected $namespace  = 'App\Controllers';

    public function boot()
    {
        $this->mapRoutes();
        $this->userRoutes();
    }

    public function mapRoutes()
    {
        Router::get(['route' => '/',        'namespace' => $this->namespace,'controller' => 'HomeController','action' => 'index']);
        Router::get(['route' => '/contact', 'namespace' => $this->namespace,'controller' => 'HomeController','action' => 'contact']);
    }

    /*
     * exemplo por arqui externo
     */
    public function userRoutes()
    {
        include __DIR__.'/../routes/user.php';
    }
}
