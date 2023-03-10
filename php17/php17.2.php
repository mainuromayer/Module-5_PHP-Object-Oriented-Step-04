<?php

class OrderCollection implements IteratorAggregate {
    private $order;

    function __construct() {
        $this->order = array();
    }

    function addOrder( $o ) {
        array_push( $this->order, $o );
    }

    function getIterator() {
        return new ArrayIterator( $this->order );
    }
}

$r = new OrderCollection;
$r->addOrder( "order-1" );
$r->addOrder( "order-2" );
$r->addOrder( "order-3" );

foreach ( $r as $nr ) {
    echo $nr . "\n";
}
