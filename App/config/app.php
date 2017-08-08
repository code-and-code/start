<?php

return [

    'public'   => false,
    'url'      => 'http://127.0.0.1:8080',
    'timezone' => 'UTC',

    'database' => [

        'mysql' => [ 'host'    => '127.0.0.1',
            'dbname'   => 'start',
            'username' => 'root',
            'password' =>  '123456'
        ]
    ],

    'layout' => [

        'folder'     => '../App/views/',
        'tag'       => ['{','}'],
        'extension' => '.html.twig',
        'cache'     => '../storage/compilation_cache'
    ],

    'file'  => [
        'folder' => '../public/assets/profile'
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

