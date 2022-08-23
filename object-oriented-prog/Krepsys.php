<?php
class Krepsys {
    public $didis = 500;
    public $ats = [];

    public function detiIKrepsi($grybas)
    {
        foreach($grybas as $val){
            $this->ats[] = $val;
        }
    }

    public function atsakymas()
    {
        return $this->ats;
    }
}