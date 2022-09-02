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
        
        return App::redirect('list');
    }
    
    public function list()
    {
        return App::view('user_list', ['title'=>'User List', 'users' => Json::connect()->showAll()]); 
    }

    public function edit(int $id)
    {
        return App::view('user_edit', ['title' => 'User Edit', 'user' =>Json::connect()->show($id)]);
    }

    public function update(int $id)
    {
        Json::connect()->update($id,[
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'asmensKodas' => $_POST['asmensKodas'],
            'pinigai' => $_POST['pinigai'],
            'iban' => $_POST['iban']
        ]);
        return App::redirect('list');
    }
    public function updateMoney(int $id)
    {
        Json::connect()->update($id,[
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'asmensKodas' => $_POST['asmensKodas'],
            'pinigai' => $_POST['pinigai'],
            'iban' => $_POST['iban']
        ]);
        return App::view('user_edit', ['title' => 'User Edit', 'user' =>Json::connect()->show($id)]);
    }
    
    public function delete(int $id)
    {
        
        Json::connect()->delete($id);
        
     return App::redirect('list');
    }


}