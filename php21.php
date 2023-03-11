<?php

# Comparing Objects -

class Planet {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e1 = new Planet("Earth");
$m = new Planet("Mars");
$e2 = $e;

#--------------------------

if($e == $m){
    echo "Similar Planet\n";
}else{
    echo "Not Semilar\n";  #
}

#--------------------------

// $e1->name = "Earth 2";
if($e === $e1){
    echo "Similar Planet\n";
}else{
    echo "Not Semilar\n";  #
}

#--------------------------

if($e === $e2){
    echo "Similar Planet\n";  #
}else{
    echo "Not Semilar\n";
}

#--------------------------

if($e1 === $e2){
    echo "Similar Planet\n";
}else{
    echo "Not Semilar\n";  #
}

# Note : Object compare করার সময় always type check করে নিতে হবে।