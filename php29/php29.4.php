<?php

class Driver {
    protected $vehicle;

    public function __construct( VehicleInterface $vehicle ) {
        $this->vehicle = $vehicle;
    }

    public function startVehicle() {
        $this->vehicle->start();
    }
}

class Bike implements VehicleInterface {
    public function start() {
        print( "Bike Started" );
    }
}

class Car implements VehicleInterface {
    public function start() {
        print( "Car Started" );
    }
}

class Plane implements VehicleInterface {
    public function start() {
        print("Plane Started");
    }
}

interface VehicleInterface {
    public function start();
}

$bike = new Bike();
$car = new Car();
$plane = new Plane();
$driver = new Driver( $plane );
$driver->startVehicle();

/**
 * এখানে আমরা __construct function এ যে instance(VehicleInterface) টা পাস করছি, এটাই মূলত dependency injection.
 * এখানে আমরা __construct function এ vehicle টা আমার লাগছে, এটা হচ্ছে Driver ক্লাস এর dependency.
 * আমি এখানে dependency টা Driver ক্লাস এর মধ্যে instantshiet না করে VehicleInterface এর মাধ্যমে তার নিজের ক্লাস এ পাস করে দিলাম, এটাই হচ্ছে injection.
 * 
 */