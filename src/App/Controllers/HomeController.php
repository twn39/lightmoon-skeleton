<?php

namespace App\Controllers;

class HomeController
{
    public function index($request, $response, $params)
    {
        $response->write(json_encode([
            'title' => 'lightmoon start!',
        ]));

        return $response;
    }
}
