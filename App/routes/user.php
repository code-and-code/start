<?php

use Cac\Route\Router;


Router::get(['route' => '/user',           'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>true, 'action' => 'index']);
Router::get(['route' => '/user/edit/$id',  'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>true, 'action' => 'edit']);


