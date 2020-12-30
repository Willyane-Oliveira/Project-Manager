<?php

$container['events'] = function () {
  return new Zend\EventManager\EventManager;
};

$container['settings'] = function () {
  return [
    'db' => [
      'dsn' => 'mysql:host=localhost',
      'database' => 'project_manager',
      'username' => 'root',
      'password' => 'pass1234!',
      'options' => [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']//utf8 prevents character breakage
    ]
  ];
};

$container['db'] = function ($c) {
  $dsn = $c['settings']['db']['dsn'] . ';dbname=' . $c['settings']['db']['database'];
  $username = $c['settings']['db']['username'];
  $password = $c['settings']['db']['password'];
  $options = $c['settings']['db']['options'];

  //Connection to database
  $pdo = new \PDO($dsn, $username, $password, $options);

  //Show db connection errors
  $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

  return $pdo;
};

$container['users_model'] = function ($c) {
  return new \App\Models\Users($c);
};

return $container;
