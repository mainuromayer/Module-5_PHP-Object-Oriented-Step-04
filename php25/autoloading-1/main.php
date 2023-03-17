<?php

# Class file autoloading -

// include "bike.php";
// include "planet.php";
// include "spaceship.php";

#---------------------------------

// function __autoload($name){
//         include "{$name}.php";
// }
    
#---------------------------------

function autoload($name){
    include "{$name}.php";
}
spl_autoload_register('autoload');


(new Bike)->getType();
echo PHP_EOL;
(new SpaceShip)->launch();