<?php

namespace App\Models;

use projectmanager\Model;

class Users extends Model
{
  public function setPassword($password)
    {
        return password_hash($password, \PASSWORD_DEFAULT);
    }

    public function getByEmail($email)
    {
        return parent::get(['email' => $email]);
    }
}
