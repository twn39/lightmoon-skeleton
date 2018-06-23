<?php

namespace App\Controllers;

class HomeController
{
    public function index($request, $response, $params)
    {
        $response->write("Hello lightmoon.");

        return $response;
    }
}
