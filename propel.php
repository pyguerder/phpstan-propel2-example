<?php

return [
    'propel' => [
        'database' => [
            'connections' => [
                'bookstore' => [
                    'adapter'    => 'sqlite',
                    'classname'  => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn'        => 'sqlite://db.sqlite',
                    'user'       => '',
                    'password'   => '',
                    'attributes' => []
                ],
            ],
        ],
        'runtime' => [
            'defaultConnection' => 'bookstore',
            'connections' => ['bookstore'],
        ],
        'generator' => [
            'defaultConnection' => 'bookstore',
            'connections' => ['bookstore'],
        ]
    ]
];
