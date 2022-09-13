<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Middlewares\UserValidator as V;

class ReactController{

    public function list()
    {
        return App::json(Json::connect()->showAll());
    }

    
    public function store()
    {
        $rawData = file_get_contents("php://input");
        $rawData = json_decode($rawData, 1);

        $errors = [];
        $noErrors['noError'] = 'Vartuotojas sekmingai sukurtas';

        $vardas = trim($rawData['vardas']);
        $pavarde = trim($rawData['pavarde']);
        $asmensKodas = trim($rawData['asmensKodas']);
        //name validation
        if(empty($vardas)){
            $errors['vardas'] = 'Vardo laukelis negali buti tuscias';
        }else{
            if(strlen($vardas) < 3 || $vardas == strtolower($vardas) || preg_match('/[0-9]/', $vardas)){
                $errors['vardas'] = 'Vardas negali buti is mazos raides, arba trumpesnis negu 3 simboliai, arba tureti skaiciu';
                }
        }

        //surname validation
        if(empty($pavarde)){
            $errors['pavarde'] = 'Pavardes laukelis negali buti tuscias';
        }else{
            if(strlen($pavarde) < 3 || $pavarde == strtolower($pavarde) || preg_match('/[0-9]/', $pavarde)){
                $errors['pavarde'] = 'Pavarde negali buti is mazos raides, arba trumpesne negu 3 simboliai, arba tureti skaiciu';
            }
        }

        //personal number validation
        if(empty($asmensKodas)){
            $errors['asmensKodas'] = 'Asmens Kodo laukelis negali buti tuscias';
        }else{
            if(!preg_match('/^[3-6][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/', $rawData['asmensKodas'])){
                $errors['asmensKodas'] = 'Asmens kodas netaisiklingas';
            }else{
                foreach(Json::connect()->showAll() as $kodas){
                    if($asmensKodas == in_array($asmensKodas, $kodas)){
                            $errors['asmensKodas'] = 'Toks asmens kodas jau egzistuoja';
                        }
                }
            
            }
        }


        if(!empty($errors)){
            
            return App::json(['error' => $errors]);
        }else{
            Json::connect()->create([
                'vardas' => $rawData['vardas'],
                'pavarde' => $rawData['pavarde'],
                'asmensKodas' => $rawData['asmensKodas']
            ]);
            return App::json(['error' => $noErrors]);
        }






    }

    public function delete(int $id)
    {
        $user = Json::connect()->show($id);
        $delete['delete'] = 'Negalima istrinti vartuotojo. saskaitoje yra pinigu';
        
        if($user['pinigai'] > 0){
            return App::json(['error' => $delete]);
        }else{
            Json::connect()->delete($id);
            return App::json([]);
        }

    }

    public function update(int $id)
    {
        $rawData = file_get_contents("php://input");
        $rawData = json_decode($rawData, 1);

        Json::connect()->update($id, [
            'vardas' => $rawData['vardas'],
            'pavarde' => $rawData['pavarde'],
            'asmensKodas' => $rawData['asmensKodas'],
            'iban' => $rawData['iban'],
            'pinigai' => $rawData['pinigai']
        ]);
        return App::json([]);
    }

}