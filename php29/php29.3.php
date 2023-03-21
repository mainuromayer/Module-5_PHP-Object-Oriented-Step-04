<?php

class Driver {
    protected $vehicle;

    // public function __construct(Bike $vehicle) {
    //     $this->vehicle = $vehicle;
    // }

    public function __construct(Car $vehicle) {
        $this->vehicle = $vehicle;
    }

    public function startVehicle(){
        $this->vehicle->start();
    }
}

class Bike {
    public function start(){
        print("Bike Started");
    }
}

class Car {
    public function start(){
        print("Car Started");
    }
}

// $bike = new Bike();
// $driver_1 = new Driver($bike);
// $driver_1->startVehicle();

$car = new Car();
$driver_2 = new Driver($car);
$driver_2->startVehicle();