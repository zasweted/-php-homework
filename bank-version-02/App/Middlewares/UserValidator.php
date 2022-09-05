<?php

namespace App\Middlewares;

use App\DB\Json;
class UserValidator {

    private $data;
    private $errors =[];
    private static $fields = ['vardas', 'pavarde', 'asmensKodas', 'pinigai'];
    
    public function __construct(array $postData)
    {
        $this->data = $postData;
    }

    public function validateForm()
    {
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                return trigger_error($field . ' is not present in data');
            }
        }
        $this->validateName();
        $this->validateSurname();
        $this->validatePersonalId();
        return $this->errors;

    }

    private function validateName()
    {
        $val = trim($this->data['vardas']);

        if(empty($val)){
            $this->addError('vardas', 'Vardo laukelis negali buti tuscias');
        }else{
            if(strlen($val) < 3 || $val == strtolower($val) || preg_match('/[0-9]/', $val)){
                $this->addError('vardas', 'Vardas negali buti is mazos raides, arba trumpesnis negu 3 simboliai, arba tureti skaiciu');
                }
        }
    }

    private function validateSurname()
    {
        $val = trim($this->data['pavarde']);

        if(empty($val)){
            $this->addError('pavarde', 'Pavardes laukelis negali buti tuscias');
        }else{
            if(strlen($val) < 3 || $val == strtolower($val) || preg_match('/[0-9]/', $val)){
                $this->addError('pavarde', 'Pavarde negali buti is mazos raides, arba trumpesne negu 3 simboliai, arba tureti skaiciu');
            }
        }
    }

    private function validatePersonalId()
    {
        $val = trim($this->data['asmensKodas']);

        if(empty($val)){
            $this->addError('asmensKodas', 'Asmens Kodo laukelis negali buti tuscias');
        }else{
            if(!preg_match('/^[3-6][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/', $_POST['asmensKodas'])){
                $this->addError('asmensKodas', 'Asmens kodas netaisiklingas') ;
            }else{
                foreach(Json::connect()->showAll() as $kodas){
                    if($val == in_array($val, $kodas)){
                            $this->addError('asmensKodas', 'Toks asmens kodas jau egzistuoja');
                        }
                }
            
            }
        }
    }

    private function addError(string $key, string $val)
    {
        $this->errors[$key] = $val;
        print_r($this->errors);
    }
}