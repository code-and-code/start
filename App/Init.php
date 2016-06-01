<?php

namespace App;

use Cac\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home']    = ['route' => '/',           'controller' => 'Index', 'action' => 'index'];
        $ar['contact'] = ['route' => '/contact',    'controller' => 'Index', 'action' => 'contact'];
        $this->setRoutes($ar);
    }

}
