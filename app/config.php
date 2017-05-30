<?php
// array with config credentials, change as needed
// supplies config as array when called
return [
    'database' => [
        'name' => 'webprosjekt2',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];