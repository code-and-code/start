<?php

use Cac\Route\Router;

Router::get(['route'  => '/admin/user',            'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>false,  'action' => 'index' ]);
Router::get(['route' => '/admin/user/delete/$var', 'namespace' => $this->namespace,'controller' => 'UserController', 'auth' =>false,  'action' => 'delete']);

//edit profile
Router::get(['route'  => '/admin/user/profile/edit',       'namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'edit'   ]);
Router::post(['route' => '/admin/user/profile/update/$var','namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'update' ]);


//edit profile image

Router::get(['route'  => '/admin/user/profile/sendimage/$var',  'namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'sendImage'   ]);
Router::post(['route' => '/admin/user/profile/uploadimage/$var','namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'uploadImage' ]);
Router::get(['route'  => '/admin/user/profile/deleteimage/$var', 'namespace' => $this->namespace,'controller' => 'ProfileController', 'auth' =>true,  'action' => 'deleteImage']);