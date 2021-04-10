<?php

return
[
    'paths' => [
        'migrations' => '../../../app/database/migrations',
        'seeds' => '../../../app/database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'pipegrep',
            'user' => 'pipegrep',
            'pass' => '123456',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => 'pipegrep',
            'user' => 'pipegrep',
            'pass' => '123456',
            'port' => '3306',
            'charset' => 'utf8',
        ],
    ],
    'version_order' => 'creation'
];
