<?php

$container['projects_model'] = function ($c) {
  return new \projectmanager\Tasks\Models\Projects($c);
};