<?php

# How to write better code with OOP by forcing

class Shape{
    # শুধুমাত্র Shape টাইপের function গুলোকে addShape এ নিবে, এগুলো যদি Shape টাইপের function না হয়, তাহলে count হবে না
}

class Shapes{
    private $shapes;

    function __construct(){
        $this->shapes = array();
    }

    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }

    function totalShapes(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{
    
}

class Triangle extends Shape{

}

class Student{

}

$shapeCollection = new Shapes();
$shapeCollection->addShape(new Rectangle());
$shapeCollection->addShape(new Triangle());
// $shapeCollection->addShape(new Student());
echo $shapeCollection->totalShapes();