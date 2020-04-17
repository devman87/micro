<?php

return [
    'default' => 'mysql',
    'mysql' => [
        'dsn' => 'mysql:host=localhost;dbname=test_db;charset=utf8',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    ]
];