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

        Json::connect()->create([
            'vardas' => $rawData['vardas'],
            'pavarde' => $rawData['pavarde'],
            'asmensKodas' => $rawData['asmensKodas']
        ]);
        return App::json([]);
    }

    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::json([]);
    }

    public function update(int $id)
    {
        $rawData = file_get_contents("php://input");
        $rawData = json_decode($rawData, 1);

        Json::connect()->update($id, [
            'vardas' => $rawData['vardas'],
            'pavarde' => $rawData['pavarde'],
            'asmensKodas' => $rawData['asmensKodas'],
            'pinigai' => $rawData['pinigai']
        ]);
        return App::json([]);
    }

}