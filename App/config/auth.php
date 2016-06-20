<?php

return [
        'auth' => [
                    'class'          =>'App\Models\User',
                    'viewLogin'      => 'auth.login',
                    'viewRegister'   => 'auth.register',
                    'required'       => ['email','password'],
                    'redirect'       => '/admin',
                    'notauthorized'  => '/auth'
                   ],


];
