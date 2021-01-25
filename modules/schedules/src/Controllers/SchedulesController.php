<?php

namespace projectmanager\Schedules\Controllers;

use projectmanager\CrudController;

class SchedulesController extends CrudController
{
    protected function getModel(): string
    {
        return 'schedules_model';
    }
}