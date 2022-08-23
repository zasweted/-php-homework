<?php

class Stikline {

    private $turis;
    private $kiekis;
    private $likutis;

    public function __construct(int $turis)
    {
        $this->turis = $turis;
        $this->kiekis = 0;
    }

    public function likutis()
    {
        return $this->likutis;
    }

    public function ipilti(int $amount)
    {
        $this->kiekis += $amount;
        $this->likutis = $this->kiekis - $amount;
    }

    public function kiekPripiltaIStikline() : int
    {
        return $this->kiekis;
    }

}