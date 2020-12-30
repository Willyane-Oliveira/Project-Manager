<?php

$composer = require __DIR__ . '/vendor/autoload.php';

require __DIR__.'/config/modules.php';

$app = new projectmanager\App($composer, $modules);
$app->run();
