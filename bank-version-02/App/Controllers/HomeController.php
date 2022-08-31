<?php

namespace App\controllers;

use App\App;
use App\DB\Json;

class HomeController {

    public function home()
    {
        $title = 'Home Page';

        Json::connect();

        App::view('home', ['title' => $title]);
    }
}