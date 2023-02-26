<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'charset' => 'utf8mb4',
];
