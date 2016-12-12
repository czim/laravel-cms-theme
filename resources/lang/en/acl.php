<?php

return [

    'permission'  => 'permission',
    'permissions' => 'permissions',


    'users' => [
        'single' => 'user',
        'plural' => 'users',

        'index' => [
            'title'      => 'Users',
            'empty_list' => 'No users',
        ],

        'form' => [
            'email'           => 'Email Address',
            'password'        => 'Password',
            'password-new'    => 'New Password',
            'password-repeat' => 'Repeat Password',
            'name'            => 'Name',
            'first-name'      => 'First Name',
            'last-name'       => 'Last Name',
            'roles'           => 'Roles',
        ],

        'columns' => [
            'email' => 'Email',
            'roles' => 'Roles',
        ],
    ],

    'roles' => [
        'single' => 'role',
        'plural' => 'roles',

        'index' => [
            'title'      => 'Roles',
            'empty_list' => 'No roles',
        ],

        'form' => [
            'key'             => 'Key',
            'name'            => 'Name',
            'permissions'     => 'Permissions',
        ],

        'columns' => [
            'key'         => 'Key',
            'in-use'      => 'In Use',
            'permissions' => 'Permissions',
        ],
    ],

];
