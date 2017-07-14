<?php

namespace App\Providers;

use Cac\Provider\ServiceProvider;
use Cac\Route\Router;

class AuthProvider implements ServiceProvider
{
    protected $namespace  = 'App\Controllers\Auth';

    public function boot()
    {
        $this->mapRoutes();
        $this->registerRoutes();
    }

    public function mapRoutes()
    {
        Router::get(['route'  => '/auth',       'namespace' => $this->namespace,'controller' => 'AuthController','action' => 'getLogin']);
        Router::post(['route' => '/auth/login', 'namespace' => $this->namespace,'controller' => 'AuthController','action' => 'postLogin']);
        Router::get(['route'  => '/auth/login', 'namespace' => $this->namespace,'controller' => 'AuthController','action' => 'logout'   ]);
    }


    public function registerRoutes()
    {
        Router::get(['route'  => '/register',       'namespace' => $this->namespace,'controller' => 'AuthController','action'  => 'getRegister'  ]);
        Router::post(['route'  => '/register/store','namespace' => $this->namespace,'controller' => 'AuthController','action'  => 'postRegister'  ]);
    }

 }
