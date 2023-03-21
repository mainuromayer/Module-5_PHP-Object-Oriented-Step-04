<?php

class Driver {
    protected $vehicle;

    public function __construct(Vehicle  $vehicle) {
        $this->vehicle = $vehicle;
    }

    // public function __construct() {
    //     $engine = new Engine();
    //     this->vehicle = new Vehicle($engine);
    //     # hard code করে করা।
    // }
}

class Vehicle {
    protected $engine;

    public function __construct($engine){
        $this->engine = $engine;
    }
}

class Engine {
     
}

$engine = new Engine();
$vehicle = new Vehicle($engine);
$driver = new Driver($vehicle);
/**
 * এগুলো হচ্ছে caller. সে আমার ডিপেন্ডেন্সি গুলো crate করে করে পাস করে দেয়।
 */


/**
 * এখানে যে Driver ক্লাস টা আছে, তার কিন্তু জানা লাগতেছে না, তার যে instance $vehicle টা থাকবে, তার জন্য যে $engine টা, সেটা আমি কোথায় পাব।
 */

/**
 * এখানে মূল কথাটা হচ্ছে, আমার যে Driver ক্লাসটা আছে, সেটা নিয়ে যে কাজ করলে, তার যে হেডেক আছে, তার উপর দায়িত্ব দিয়ে দেয়া, মানে তার নিচের সব গুলো ডিপেন্ডেন্সির কথা জানা লাগতেছে না।
 * এই জিনিসটাকে বলা হয় invertion of princple / dependency invertion
 */