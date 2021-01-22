<?php

$router->add('GET', '/api/projects', 'projectmanager\Tasks\Controllers\ProjectsController::index');
$router->add('POST', '/api/projects', 'projectmanager\Tasks\Controllers\ProjectsController::create');

$router->add('GET', '/api/sections', 'projectmanager\Tasks\Controllers\SectionsController::listByProject');
$router->add('POST', '/api/sections', 'projectmanager\Tasks\Controllers\SectionsController::create');

$router->add('GET', '/api/tasks', 'projectmanager\Tasks\Controllers\Taskscontroller::listByProject');
$router->add('POST', '/api/tasks', 'projectmanager\Tasks\Controllers\Taskscontroller::create');

$router->add('GET', '/api/subtasks', 'projectmanager\Tasks\Controllers\SubTasksController::listByTask');
$router->add('POST', '/api/subtasks', 'projectmanager\Tasks\Controllers\SubTasksController::create');
$router->add('PUT', '/api/subtasks/(\d+)', 'projectmanager\Tasks\Controllers\SubTasksController::update');