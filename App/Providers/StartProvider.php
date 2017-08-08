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
    }

    public function mapRoutes()
    {
        //injetar rotas
        Router::get(['route' => '/',        'namespace' => $this->namespace,'controller' => 'HomeController','action' => 'index']);
        Router::get(['route' => '/contact', 'namespace' => $this->namespace,'controller' => 'HomeController','action' => 'contact']);
    }

    /*
     * exemplo por arqui externo
     */
    public function userRoutes()
    {
        //passar arquivos de rotas
        include __DIR__.'/../routes/user.php';
    }
    
    
}
