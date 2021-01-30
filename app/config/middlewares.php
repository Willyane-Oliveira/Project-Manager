<?php

$app->middleware('before', function ($c) {
  session_start();
});

//To protects api routes with authentication
$app->middleware('before', function ($c) {
  if (!preg_match('/^\/api\/*./', $c['router']->getCurrentUrl())) {
      return;
  }

  $data = (new \App\Controllers\UsersController)->getCurrentUser($c);

//returns the logged in user
$c['loggedUser'] = function () use ($data) {
  return $data;
};
});