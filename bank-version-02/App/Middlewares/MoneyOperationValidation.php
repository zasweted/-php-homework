<?php

namespace App\Middlewares;

class MoneyOperationValidation {


    private $data;
    private $errors = [];
    private static $fields = ['pinigai'];

    public function __construct(array $postData)
    {
        $this->data = $postData;
    }

    public function validateForm()
    {
        
    }













}