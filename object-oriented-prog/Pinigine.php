<?php
class Pinigine{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function __construct($startingMoney = '0'){
        $this->popieriniaiPinigai = 0;
        $this->metaliniaiPinigai = 0;
    }

    public function idieti($kiekis){
        if($kiekis <= 2){
            $this->metaliniaiPinigai += $kiekis;
        }else{
            $this->popieriniaiPinigai += $kiekis;
        }
    }
}