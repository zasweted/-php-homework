<?php

namespace App;

use App\Controllers\HomeController as H;
use App\Controllers\UserController as U;
use App\Controllers\LoginController as L;
use App\Controllers\ReactController as R;
use App\Middlewares\Auth;

class App {

    public static function start()
    {
        session_start();
        self::router();
    }

    public static function router()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];

        if(!Auth::authorize($url)){
            return self::redirect('login');
        }

        if($method == 'GET' && count($url) == 1 && $url[0] == ''){
            return((new H)->home());
        }
        if($method == 'GET' && count($url) == 1 && $url[0] == 'create'){
            return((new U)->create());
        }
        if($method == 'POST' && count($url) == 1 && $url[0] == 'store'){
            return((new U)->store());
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'addMoney'){
            return((new U)->addMoney((int)$url[1]));
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'removeMoney'){
            return((new U)->removeMoney((int)$url[1]));
        }
        if($method == 'POST' && count($url) == 1 && $url[0] == 'create'){
            return((new U)->create());
        }
        if($method == 'GET' && count($url) == 1 && $url[0] == 'list'){
            return((new U)->list());
        }
        if($method == 'GET' && count($url) == 2 && $url[0] == 'prideti'){
            return((new U)->edit($url[0], (int)$url[1]));
        }
        if($method == 'GET' && count($url) == 2 && $url[0] == 'atimti'){
            return((new U)->edit($url[0], (int)$url[1]));
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'update'){
            return((new U)->update($url[1]));
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'delete'){
             return((new U)->delete((int)$url[1]));
        }
        if($method == 'GET' && count($url) == 1 && $url[0] == 'login'){
            if(Auth::isLoged()){
                return self::redirect('');
            }
            return((new L)->login());
        }
        if($method == 'POST' && count($url) == 1 && $url[0] == 'login'){
            return((new L)->doLogin());
        }
        if($method == 'POST' && count($url) == 1 && $url[0] == 'logout'){
            return((new L)->logout());
        }


        //REACT

        if($method == 'OPTIONS'){
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
            header('Access-Control-Allow-Headers: Content-Type');
        }
        if($method == 'GET' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list'){
            return((new R)->list());
        }
        if($method == 'POST' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list'){
            return((new R)->store());
        }
        if($method == 'DELETE' && count($url) == 3 && $url[0] == 'react' && $url[1] == 'list'){
            return((new R)->delete($url[2]));
        }
        if($method == 'PUT' && count($url) == 3 && $url[0] == 'react' && $url[1] == 'list'){
            return((new R)->update($url[2]));
        }
    }

    public static function view(string $name, array $data=[])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }
    
    public static function json(array $data)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
        echo json_encode($data);
        header("Content-Type: application/json");
    }
    public static function redirect(string $where)
    {
        header('Location: ' . URL . $where);
    }



}