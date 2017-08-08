<?php

use Cac\Route\Router;


Router::get(['route' => '/admin',           'namespace' => $this->namespace,'controller' => 'AdminController', 'auth' =>false, 'action' => 'index']);


