<?php

$container['schedules_model'] = function ($c) {
    $id = $c['loggedUser']['user']->id;
    $schedules = new \projectmanager\Schedules\Models\Schedules($c);
    $schedules->user_id = $id;

    return $schedules;
};