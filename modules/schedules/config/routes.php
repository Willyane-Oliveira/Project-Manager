<?php

$router->add('GET', '/api/schedules', 'projectmanager\Schedules\Controllers\SchedulesController::index');
$router->add('POST', '/api/schedules', 'projectmanager\Schedules\Controllers\SchedulesController::create');