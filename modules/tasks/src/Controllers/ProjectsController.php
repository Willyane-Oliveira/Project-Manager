<?php

namespace projectmanager\Tasks\Controllers;

use projectmanager\CrudController;

class ProjectsController extends CrudController
{
  protected function getModel(): string
  {
    return 'projects_model';
  }
}