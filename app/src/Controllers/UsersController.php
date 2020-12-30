<?php

namespace App\Controllers;

use projectmanager\CrudController;

class UsersController extends CrudController
{
  protected function getModel(): string
  {
    return 'users_model';
  }
}