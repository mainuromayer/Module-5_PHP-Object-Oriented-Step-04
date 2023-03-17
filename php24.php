<?php

# Discussion of Method Overloading with call and callStatic Magic Methods

class MotorCycle {
    private $parameters;

    function __construct( $displacement, $capacity, $mileage ) {
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __set( $name, $value ) {
        $this->parameters[$name] = $value;
    }

    function __get( $name ) {
        return $this->parameters[$name];
    }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} is not Found \n";
            return false;
        }
        return true;
    }

    function __unset( $name ) {
        unset( $this->parameters[$name] );
    }

    function __call( $name, $arguments ) {
        if('run' == $name){
            if($arguments){
                echo "I am running at {$arguments[0]}\n";
            }else{
                echo "I am runing\n";
            }
        }
    }

    static function __callStatic($name, $arguments){
        echo "Static Call\n";
    }
}

$discover = new MotorCycle( '150cc', '16lrt', '40kmph' );
$discover->displacement = '135cc';
echo $discover->displacement . "\n";


if ( isset( $discover->tiresize ) ) {
    echo $discover->tiresize . "\n";
} else {
    echo "Not Found \n";
}


unset( $discover->capacity );
print_r( $discover );


$discover->run();   // I am runing
echo PHP_EOL;
$discover->run('100kmph');  // I am running 100kmph


MotorCycle::wash();