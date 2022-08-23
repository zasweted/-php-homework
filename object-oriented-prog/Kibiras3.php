<?php
class Kibiras3{

    protected $akmenuKiekis;

    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }

    public function prideti1Akmeni() : void
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis) : void
    {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() : int
    {
        return $this->akmenuKiekis;
    }




}