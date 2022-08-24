<?php
class MarsoPalydovas {

    private static $title;

    public static function newPalydovas(string $title) : MarsoPalydovas
    {
        return self::$title ?? self::$title = new self;
    } 

}