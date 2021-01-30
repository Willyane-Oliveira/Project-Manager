<?php

namespace projectmanager\Tasks\Controllers;

use projectmanager\CrudController;

class TasksController extends CrudController
{
  protected function getModel(): string
    {
        return 'tasks_model';
    }

    public function listByProject($c, $request)
    {
        $id = $request->query->get('id');
        return $c['tasks_model']->getByProjectId($id);
    }
}
