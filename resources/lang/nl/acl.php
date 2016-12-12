<?php

return [

    'permission'  => 'recht',
    'permissions' => 'rechten',


    'users' => [
        'single' => 'gebruiker',
        'plural' => 'gebruikers',

        'index' => [
            'title'      => 'Gebruikers',
            'empty_list' => 'Geen gebruikers',
        ],

        'form' => [
            'email'           => 'E-mailadres',
            'password'        => 'Wachtwoord',
            'password-new'    => 'Nieuw wachtwoord',
            'password-repeat' => 'Herhaal wachtwoord',
            'name'            => 'Naam',
            'first-name'      => 'Voornaam',
            'last-name'       => 'Achternaam',
            'roles'           => 'Rollen',
        ],

        'columns' => [
            'email' => 'E-mail',
            'roles' => 'Rollen',
        ],
    ],

    'roles' => [
        'single' => 'rol',
        'plural' => 'rollen',

        'index' => [
            'title'      => 'Rollen',
            'empty_list' => 'Geen rollen',
        ],

        'form' => [
            'key'             => 'Id',
            'name'            => 'Naam',
            'permissions'     => 'Rechten',
        ],

        'columns' => [
            'key'         => 'Id',
            'in-use'      => 'Gebruikt',
            'permissions' => 'Rechten',
        ],
    ],

];
