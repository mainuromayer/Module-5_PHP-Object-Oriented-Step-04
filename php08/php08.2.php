<?php

abstract class OurClass{
    function sayHi(){
        echo "Hi\n";
    }

    // abstract public function eat();
    abstract function eat($v1, $v2=0);
}

class MyClass extends OurClass{

    function sayHi(){
        echo "Hello\n";
    }

    # parent class এ যদি abstract public function হয় child class এ extends করার পর সেটাকে private function করতে পারব না
    // private function eat(){}

    function eat($x, $y=5){
        echo "I am eating\n";
    }
}

$mc = new MyClass();
$mc->sayHi();
$mc->eat(1, 2);