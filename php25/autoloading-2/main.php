<?php
# Class file autoloading -

function autoload($name){
    if(strpos($name, "Planet_") !== false){
        $filename = str_replace("Planet_", "", $name);
        include strtolower("planets/{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
}
spl_autoload_register('autoload');


(new Bike)->getType();
echo PHP_EOL;
(new SpaceShip)->launch();
echo PHP_EOL;
(new Planet_Mars)->getName();