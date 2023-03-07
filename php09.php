<?php

abstract class OurClass{
    # abstract হলে child class এ implement করতেই হবে।
    // abstract function doSomething(){
    //     echo  "Doing Something";
    // }

    # final হলে child class এ implement করাই যাবে না।
    final function doSomething(){
        echo  "Doing Something";
    }
}

class MyClass extends OurClass{
    function doSomething(){
        echo  "Doing Nothing";
    }
}

$mc = new MyClass();
$mc->doSomething();