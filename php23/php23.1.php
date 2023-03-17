<?php

# Discussion of property overloading and the isset () and unset () magic methods

class MotorCycle {
    private $displacement, $capacity, $mileage;

    function __construct($displacement, $capacity, $mileage) {
        $this->displacement = $displacement; 
        $this->capacity = $capacity;
        $this->mileage = $mileage;
    }

    function getDisplacement(){
        return $this->displacement;
    }

    function setDisplacement($displacement){
        $this->displacement = $displacement; 
    }

    function __get($name){
        echo $this->$name; // $this->displacement;
    }
}

$pulsar = new MotorCycle('150cc', '16lrt', '40kmph');

echo $pulsar->getDisplacement();

echo $pulsar->displacement;