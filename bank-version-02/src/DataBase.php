<?php

namespace App;

class DataBase {

    private function connect()
    {
        try {
            $userName = 'root';
            $password = '';
            $db = new PDO('mysql:host=localhost;dbname=ooplogin', $userName, $password);
        } catch (PDOException $e) {
            print 'Error!: ' . $e->getMessage() . '<br>' ;
            die();
        }
    }    
}