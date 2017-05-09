<?php

return [
    'auth' => [
        'class'          => 'App\Models\User',
        'viewLogin'      => 'login',
        'viewRegister'   => 'register',
        'required'       => ['email','password'],
        'redirect'       => '/admin',
        'notauthorized'  => '/auth'
    ],

];
