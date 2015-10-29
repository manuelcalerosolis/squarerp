<?php

return [

    'default' => 'sqllite',

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ],

    ],

];
