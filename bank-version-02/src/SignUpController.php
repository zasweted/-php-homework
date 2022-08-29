<?php

namespace App;

class SignUpContoller {
    
    private $userName;
    private $pass;
    private $passRe;

    public function __construct($userName, $pass)
    {
        $this->userName = $userName;
        $this->pass = $pass;
    }

    private function emptyInput() : bool
    {
        $result;
        if(empty($this->$userName) || empty($this->$pass) || empty($this->$passRe)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function validUserName() : bool
    {
        $result;
        if(!preg_match('/[a-zA-Z0-9]*$/', $this->userName)){
            $result = false;
        }else{
            $result = true;
            return $this->userName;
        }
    }

    private function passwordMatch()
    {
        $result;
        if($this->pass !== $this->passRe){
            $result = false;
        }else{
            $result = true;
            return $this->pass;
        }
    }

}