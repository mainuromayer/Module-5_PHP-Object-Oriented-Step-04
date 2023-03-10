<?php

# Countable Interface - Pretty cool

class Student implements IteratorAggregate, Countable {
    private $id;

    function __construct() {
        $this->id = array();
    }

    function add( $i ) {
        array_push( $this->id, $i );
    }

    function getIterator() {
        return new ArrayIterator( $this->id );
    }

    function count() {
        return count($this->id);
    }

}

$result = new Student;
$result->add( "21" );
$result->add( "22" );
$result->add( "23" );
$result->add( "24" );
$result->add( "25" );

foreach ( $result as $new_result ) {
    echo $new_result . "\n";
}

echo "Total ID : " . count( $result );