<?php

use App\Controllers\HomeController;

$app->get('home', '/', HomeController::class.'::index');
