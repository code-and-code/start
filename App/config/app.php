<?php

return [
           'public'    => true,
           'timezone' => 'UTC',

           'database' => [ 'host'     => '127.0.0.1',
                           'dbname'   => 'code',
                           'username' => 'root',
                           'password' =>  ''
                          ],

            'layout' =>  ['folder'   => '',
                          'default'  => 'app.phtml',
                          'tag'      => ['{','}']
                          ]
        ];

