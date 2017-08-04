<?php

return [
    
    'public'    => false,
    'timezone' => 'UTC',

    'database' => [ 'host'     => '127.0.0.1',
        'dbname'   => 'start',
        'username' => 'root',
        'password' =>  '123456'
    ],

    'layout' => [

        'folder'     => '../App/views/',
        'tag'       => ['{','}'],
        'extension' => '.html.twig',
        'cache'     => '../storage/compilation_cache'
    ],

    'file'  => [
        'folder' => 'images'
    ],

    'cache'  => [ 'active' => true,
        'folder' => '../storage/cache',
    ],

    'log'  => [ 'file' => 'main.log',
    'folder' => '../storage/log',
    ],

    'providers'=> [

            'App\Providers\StartProvider',
            'Cac\Auth\Providers\AuthProvider',
    ]
];

