<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home.index']    = ['route' => '/',         'controller' =>  'HomeController', 'method'=>'GET', 'action' => 'index'];
        $ar['home.contact']  = ['route' => '/contact',   'controller' => 'HomeController', 'method'=>'GET', 'action' => 'contact'];

        $ar['auth.index']     = ['route' => '/auth',          'controller' => 'AuthController', 'method'=>'GET',  'action' => 'getLogin'   ];
        $ar['auth.login']     = ['route' => '/auth/login',    'controller' => 'AuthController', 'method'=>'POST', 'action' => 'postLogin'  ];
        $ar['auth.logout']    = ['route' => '/auth/logout',   'controller' => 'AuthController', 'method'=>'GET',  'action' => 'logout'     ];

        $ar['register']       = ['route' => '/register',      'controller' => 'AuthController', 'method'=>'GET', 'action' => 'getRegister' ];
        $ar['register.store'] = ['route' => '/register/store','controller' => 'AuthController', 'method'=>'POST','action' => 'postRegister'];


        $ar['user.index']     = ['route' => '/user',         'controller' => 'UserController', 'method'=>'GET', 'auth' =>true, 'action' => 'index'];
        $ar['user.edit']      = ['route' => '/user/edit',    'controller' => 'UserController', 'method'=>'GET', 'auth' =>true, 'action' => 'edit'];

        $this->setRoutes($ar);
    }

}
