<?php

# Dependency injection -


# dependency = নির্ভরতা



class Driver {
    protected $vehicle;

    public function __construct() {
        $this->vehicle = new Vehicle();
    }
}

class Vehicle{
    // TODO : a lot of task
}

$driver = new Driver();


/** 
 * Note :
 * এখানে vehicle হচ্ছে আমার Driver এর Dependency
 * এই vehicle ছাড়া আমরা Driver এর অনেক কিছু করতে পারব না
 */