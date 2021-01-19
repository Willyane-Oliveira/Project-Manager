<?php

$router->add('GET', '/api/projects', 'projectmanager\Tasks\Controllers\ProjectsController::index');
$router->add('POST', '/api/projects', 'projectmanager\Tasks\Controllers\ProjectsController::create');