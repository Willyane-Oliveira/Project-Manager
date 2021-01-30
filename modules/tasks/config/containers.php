<?php

$container['projects_model'] = function ($c) {
  $id = $c['loggedUser']['user']->id;
  $projects = new \projectmanager\Tasks\Models\Projects($c);
  $projects->user_id = $id;

  return $projects;
};

$container['tasks_model'] = function ($c) {
  $id = $c['loggedUser']['user']->id;
  $tasks = new \projectmanager\Tasks\Models\Tasks($c);
  $tasks->user_id = $id;

  return $tasks;
};

$container['sections_model'] = function ($c) {
  $id = $c['loggedUser']['user']->id;
  $sections = new \projectmanager\Tasks\Models\Sections($c);
  $sections->user_id = $id;

  return $sections;
};

$container['subtasks_model'] = function ($c) {
  $id = $c['loggedUser']['user']->id;
  $subtasks = new \projectmanager\Tasks\Models\SubTasks($c);
  $subtasks->user_id = $id;

  return $subtasks;
};