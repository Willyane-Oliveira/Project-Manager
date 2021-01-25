<?php

namespace App\Controllers;

use projectmanager\Exceptions\HttpException;
use Firebase\JWT\JWT;

class UsersController
{
  public function register($c, $request)
  {
    return $c['users_model']->create($request->request->all());
  }

  public function getToken($c, $request)
  {
    $email = $request->request->get('email');
    $password = $request->request->get('password');

    //check if there is a user with the informed email
    //if it exists, check the password
    $user = $c['users_model']->getByEmail($email);
    if (!$user) {
      throw new HttpException("Unauthorized", 401);
    }

    if (!password_verify($password, $user['password'])) {
      throw new HttpException("Unauthorized", 401);
    }

    unset($user['password']); //remove hash password

    $key = 'SECRET KEY'; //key used to decrypt the jwt token password (random value)
    $data = [
      'iat' => time(), //when the token was created
      'exp' => time() + (60 * 60 * 24 * 30), //when the token will expire
      'user' => $user
    ];

    $token = JWT::encode($data, $key);
    return ['token' => $token];
  }

  public function getCurrentUser($c)
  {
    $token = getallheaders()['Authorization'] ?? null;

    if (!$token) {
      $token = filter_input(\INPUT_GET, 'token'); //check by url (e.g: index.php?token=avsgtuf)
    }

    if (!$token) {
      throw new HttpException("Unauthorized", 401);
    }

    try {
      $key = 'SECRET KEY';
      $data = JWT::decode($token, $key, ['HS256']); //security parameter HS256
    } catch (\Exception $e) {
      throw new HttpException("Unauthorized", 401);
    }

    return (array)$data;
  }
}
