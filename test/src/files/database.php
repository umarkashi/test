<?php

return [

    'default' => 'mysql',

    'connections' => [

        'mysql' => [
            'host'     => 'localhost',
            'database' => 'test1',
            'username' => 'root',
            'password' => ''
        ],

        'sqlite' => [
            'database' => 'db.sqlite'
        ]
    ]

];