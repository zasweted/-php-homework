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
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
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

    public function addMoney(int $id)
    {
        $errors = [];
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!preg_match('/^[0-9]+$/', $_POST['pinigai'])){
                $errors['add'] = 'Ivesties laukelije gali buti tik skaicius';
            }
            if(empty($_POST['pinigai'])){
                $errors['add'] = 'Ivesties laukelis negali buti tuscias';
            }
            foreach(Json::connect()->showAll() as $val){
                if($val['id'] == $id){
                    $money = $val['pinigai'];
                }
            }
            $sum = (int)$money + (int)$_POST['pinigai'];
            
            
            if(!empty($errors)) {
                $user = Json::connect()->show($id);
                App::view('prideti', ['title' => 'Add Money', 'errors'=> $errors, 'user'=> $user]);
            }else{
                Json::connect()->updateMoney($id, [
                    'pinigai' => $sum
                ]);
                return App::redirect('list');
            }
        }
    }
    public function removeMoney(int $id)
    {
        $errors = [];
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            if(!preg_match('/^[0-9]+$/', $_POST['pinigai'])){
                $errors['add'] = 'Ivesties laukelije gali buti tik skaicius';
            }
            if(empty($_POST['pinigai'])){
                $errors['add'] = 'Ivesties laukelis negali buti tuscias';
            }
            foreach(Json::connect()->showAll() as $val){
                if($val['id'] == $id){
                    $money = $val['pinigai'];
                }
            }
            $sum = (int)$money - (int)$_POST['pinigai'];
            if($sum < 0){
                $errors['add'] = 'Galutinis likutis negali buti maziau uz 0';
            }
            
            
            if(!empty($errors)) {
                $user = Json::connect()->show($id);
                App::view('atimti', ['title' => 'Remove Money', 'errors'=> $errors, 'user' => $user]);
            }else{
                Json::connect()->updateMoney($id, [
                    'pinigai' => $sum
                    
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
        $errors = [];
        $user = Json::connect()->show($id);
        if((int)$user['pinigai'] !== 0){
            $errors['add'] = 'Negalima istrinti vartuotojo. Saskaitoje yra pinigu likutis';
        }
        if(empty($errors)){
            Json::connect()->delete($id);
            return App::redirect('list');

        }else{
            return App::view('user_list', ['title'=>'User List', 'errors' => $errors, 'users' => Json::connect()->showAll(), 'kek' => $id]);
        }
    }
    
}