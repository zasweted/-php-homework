<?php
namespace App\Middlewares;

class Auth {

    private static $protect = ['create', 'list',];

    public static function authorize(array $url) : bool
    {
        if(in_array($url[0], self::$protect)){
            return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
        }
        return true;
    }

    public static function isLoged() :bool
    {
        return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
    }
}