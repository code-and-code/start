<?php

use Cac\Route\Router;

Router::get(['route'  => '/admin/user',            'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>false,  'action' => 'index' ]);
Router::get(['route'  => '/admin/user/create',     'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>false,  'action' => 'create']);
Router::post(['route' => '/admin/user/store',      'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>false,  'action' => 'store' ]);
Router::get(['route' => '/admin/user/delete/$var', 'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>false,  'action' => 'delete']);


Router::get(['route'  => '/admin/user/profile/edit/$var',  'namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'edit'   ]);
Router::post(['route' => '/admin/user/profile/update/$var','namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'update' ]);