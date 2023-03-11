<?php

class Color {
    public $color;

    function __construct( $color ) {
        $this->color = $color;
    }

    function setColor( $color ) {
        $this->color = $color;
    }
}

class FavColor {
    public $data;

    public $fav_color;

    function __construct( $param1, $param2 ) {
        $this->data = $param1;
        $this->fav_color = new Color( $param2 );
    }

    function updateColor( $c ) {
        $this->fav_color->setColor( $c );
    }

    function __clone() {
        $this->fav_color = clone $this->fav_color;
    }
}

$fc1 = new FavColor("Some Data...", "Red");
print_r($fc1);

$fc2 = clone $fc1;
print_r($fc2);


$fc2->updateColor("Green");
print_r($fc1);
print_r($fc2);