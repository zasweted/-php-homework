<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Middlewares\UserValidator as V;

class UserController {

    
    public function create()
    {

        return App::view('user_create', [
            'title' => 'New User'
        ]);
    }
    

    public function store()
    {
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $validation = new V($_POST);
            $errors = $validation->validateForm();
            if(!empty($errors)) {
                App::view('user_create', ['title'=>'User Create', 'errors' => $errors]);
            }else {
                Json::connect()->create([
                                'vardas' => $_POST['vardas'],
                                'pavarde' => $_POST['pavarde'],
                                'asmensKodas' => $_POST['asmensKodas'],
                                'pinigai' => $_POST['pinigai']
                            ]);
                            return App::redirect('list');
            }
        }
        

    }
    
    public function list()
    {
        return App::view('user_list', ['title'=>'User List', 'users' => Json::connect()->showAll()]); 
    }

    public function edit(string $page, int $id)
    {
        if($page == 'prideti'){
            return App::view('prideti', ['title' => 'Prideti', 'user' =>Json::connect()->show($id)]);
        }else{
            return App::view('atimti', ['title' => 'Atimti', 'user' =>Json::connect()->show($id)]);

        }
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
        
    public function delete(int $id)
    {
        
        Json::connect()->delete($id);
        
     return App::redirect('list');
    }
    
}