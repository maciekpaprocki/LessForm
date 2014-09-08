<?php

namespace \LeForm\Form;

Class Path{
    static $Json;
    static function set($name,$value){
        self::$$name = $value;
    }
}
Path::set('Json',dirname(dirname(__DIR__)));

