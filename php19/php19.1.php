<?php

# Object Cloning in PHP -


class FavColor {
    public $color;

    function __construct($n) {
        $this->color = $n;
    }

    function setColor($n){
        $this->color = $n;
    }
}

$str1 = new FavColor("blue");
print_r($str1);  // blue

$str2 = clone $str1;
print_r($str2);  // blue
print_r($str1);  // blue

$str2->setColor("red");
print_r($str2);  // red
print_r($str1);  // blue

$str2->setColor("orange");
print_r($str2);  // orange
print_r($str1);  // blue