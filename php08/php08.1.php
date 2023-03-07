<?php

# Abstract Classes and Abstract Methods in OOP

# class এর ভিতরে abstract method use করলে class কেও abstract বলে দিতে হবে।
abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
    # abstract method মানে হচ্ছে parent class-এ এদের কোন body/scope থাকবে না। তবে child class-এ অবশ্যই use করতে হবে এবং body/scope থাকতে হবে।
}

class Rectangle extends Shape{

    private $base, $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    function getArea(){
        return $this->base * $this->height;
    }

    function getPerimeter(){

    }
}

class Triangle extends Shape{

    private $base, $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }
    
    function getArea(){
        return $this->base * $this->height;
    }

    function getPerimeter(){
        
    }
}

$triangle = new Rectangle(10, 10);
echo $triangle->getArea();

// $shape = new Shape();
# abstract class এর object তৈরি করা যাবে না, শুধুমাত্র তাকে extends করে use করতে পারব