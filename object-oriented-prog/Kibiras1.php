<?php
echo '<pre>';
class Kibiras1{

    public $akmenuKiekis;

    public function __construct($kiekis = '0'){
        $this->akmenuKiekis = $kiekis;
    }

    public function prideti1Akmeni(){
        $this->akmenuKiekis += 1;
    }

    public function pridetiDaugAkmenu($kiekis){
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(){
        return '<h1> viso akmenu:' .$this->akmenuKiekis. '</h1>';
    }




}

