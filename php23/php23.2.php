<?php

class MotorCycle {
    private $parameters;

    function __construct( $displacement, $capacity, $mileage ) {
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    function __unset( $name ) {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} not found \n";
            return false;
        }
        return true;
    }

    function __get( $name ) {
        echo $this->parameters[$name]; // $this->parameters['displacement'];
    }

    function __set( $name, $value ) {
        $this->parameters[$name] = $value;
    }
}

$pulsar = new MotorCycle( '150cc', '16lrt', '40kmph' );
$pulsar->displacement = '135cc';
echo $pulsar->displacement . "\n";

if ( isset( $pulsar->tiresize ) ) {
    echo $pulsar->tiresize . "is Found \n";
} else {
    echo "Not Found \n";
}

unset($pulsar->mileage);
