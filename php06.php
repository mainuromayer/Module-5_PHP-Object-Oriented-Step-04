<?php
# Discussing the scope of parent and child classes -


class ParentClass{
    protected $name;

    function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "Hi from {$this->name}\n";
    }

}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        echo "Hello";
    }
}

$cc = new ChildClass("ABCD");

/*
ParentClass থেকে ChildClass এর মধ্যে যখন inheritence করব,এবং ParentClass আর ChildClass এ একই ফাংশন থাকবে, তখন সাধারণত ChildClass এর ফাংশনটা access হবে,
*/

