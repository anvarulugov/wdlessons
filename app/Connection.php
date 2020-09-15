<?php
class Connection extends PDO 
{
  function __construct() {
    global $configs;
    parent::__construct(
        'mysql:host=' . $configs['db_host'] . ';dbname=' . $configs['db_name'] . ';charset=utf8',
      $configs['db_user'], $configs['db_pass'],
      array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
}