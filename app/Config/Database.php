<?php

define('DB', [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => '',
    'port' => 3306,
    'driver' => 'mysql', //default = mysql
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]
]);