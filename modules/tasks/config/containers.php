<?php

$container['projects_model'] = function ($c) {
  return new \projectmanager\Tasks\Models\Projects($c);
};

$container['tasks_model'] = function ($c) {
  return new \projectmanager\Tasks\Models\Tasks($c);
};

$container['sections_model'] = function ($c) {
  return new \projectmanager\Tasks\Models\Sections($c);
};

$container['subtasks_model'] = function ($c) {
  return new \projectmanager\Tasks\Models\Subtasks($c);
};