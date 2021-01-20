<?php

namespace projectmanager\Tasks\Controllers;

use projectmanager\CrudController;

class SubTasksController extends CrudController
{
  protected function getModel(): string
  {
    return 'subtasks_model';
  }
}