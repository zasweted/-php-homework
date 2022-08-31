<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController {

    public function create()
    {
        return App::view('user_create', ['title' => 'New User']);
    }

    public function store()
    {
        Json::connect()->create([
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'asmensKodas' => $_POST['asmensKodas'],
            'pinigai' => $_POST['pinigai']
        ]);

        return App::redirect('');
    }

    public function list()
    {
        return App::view('user_list', ['title'=>'User List', 'users' => Json::connect()->showAll()]); 
    }

}