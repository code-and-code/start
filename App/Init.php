<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home']    = ['route' => '/',           'controller' => 'Index', 'auth' =>true, 'action' => 'index'];
        $ar['contact'] = ['route' => '/contact',    'controller' => 'Index', 'action' => 'contact'];

        $ar['auth']                   = ['route' => '/auth',               'controller' => 'Auth', 'action' => 'getLogin'    ];
        $ar['auth.login']             = ['route' => '/auth/login',         'controller' => 'Auth', 'action' => 'postLogin'   ];
        $ar['auth.logout']            = ['route' => '/auth/logout',        'controller' => 'Auth', 'action' => 'logout'      ];
        $ar['auth.register']          = ['route' => '/auth/register',      'controller' => 'Auth', 'action' => 'getRegister' ];
        $ar['auth.register.store']    = ['route' => '/auth/register/store','controller' => 'Auth', 'action' => 'postRegister'];

        $this->setRoutes($ar);
    }

}
