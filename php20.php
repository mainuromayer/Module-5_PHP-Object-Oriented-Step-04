<?php

# Conversion from object to string -

class Color {
    public $color;

    function __construct( $color ) {
        $this->color = $color;
    }

    function setColor( $color ) {
        $this->color = $color;
    }

    function __toString() {
        return "The color is {$this->color}";
    }
}

$c = new Color( "red" );
// echo serialize($c);
echo $c;