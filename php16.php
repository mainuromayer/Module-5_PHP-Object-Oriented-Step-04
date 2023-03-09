<?php

# Magic Methods in PHP Classes

class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class='') {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = strtoupper($value);
    }

    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name = $name;
    // }
    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }
    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class){
    //     $this->class = $class;
    // }
}

$R = new Student("Karim", "13", "3");

// $R = new Student();
// $R->setName("Dalim");


// echo $R->getName();

$R->name = "Kamrul";

echo $R->name;