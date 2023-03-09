<?php

# Discussion of static scope

class A{
    protected static $name;
    static function sayHi(){
        self::$name = "Hello\n";
        echo "Hi From A\n";
    }
}

class B extends A{
    static function sayHi(){
        parent::sayHi();
        echo B::$name;
        echo "Hi From B\n";
    }
}

B::sayHi();

// echo B::$name;

/**
 * function - এর আগে কোন specefire method না দিলে এটা public ই থাকবে।
 * public - এটা বাইরে থেকে access করা যাবে।
 * private - এটা বাইরে থেকে access করা যাবে না।
 * protected - এটা বাইরে থেকে access করা যাবে না, কিন্তু main class এর child class এ ও use করা যাবে।
 */