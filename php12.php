<?php

# Static methods and properties of classes

class MathCalculator{

    private $number;

    static $name;

    static function fibonacci($n){

        // $this->number = 12; 
        /**
         * static method এর মধ্যে this নামে কিছু নেই
         * static method এ object create করে ডাটা access করা যাবেনা।
         * static method + static variable this দিয়ে access করতে পারব না।
         */

        self::$name = "Mainur";
        self::doSomething();

        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething(){
        echo "Doing Something\n";
    }

    function factorial($n){
        echo self::$name = "ABCD \n";
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        /**
         * public function এর মধ্যে this use করা যাবে + self দিয়ে ও call করতে পারব।
         */
        echo "Calculating factorial of {$n}\n";
    }
}



$mathc = new MathCalculator();
$mathc->fibonacci(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;