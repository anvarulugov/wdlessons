<?php
global $configs, $db;

if (defined('DEBUG') && DEBUG === true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

$configs = [
    'db_name' => 'darslar',
    'db_host' => 'localhost',
    'db_user' => 'anvar',
    'db_pass' => 'anvar',
];