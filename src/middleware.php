<?php

$app->middleware(function ($request, $response) {
    $response->header('Content-Type', 'Application/json');
    return $response;
}, 10);