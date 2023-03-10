<?php
// A practical example of an interface -

class DistrictCollection {
    private $districts;

    function __construct() {
        $this->districts = array();
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    function getDistricts() {
        return $this->districts;
    }
}

$district = new DistrictCollection;
$district->add( "Feni" );
$district->add( "Dhaka" );
$district->add( "Bogura" );
$district->add( "Rajshahi" );
$district->add( "Sylhet" );

$_districts = $district->getDistricts();
print_r($_districts);

foreach($_districts as $_district){
    echo $_district . "\n";
}
