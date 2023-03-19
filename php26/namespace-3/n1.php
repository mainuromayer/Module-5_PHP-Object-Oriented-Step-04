<?php

namespace Project;
include "c1.php";
include "c2.php";

use \Project\MotorCycles\Bike as Hornet;
use \Project\Bike as Pulsar;

$c1 = new Bike();
echo $c1->getName();

$c2 = new Motorcycles\Bike();
echo $c2->getName();

$h = new Hornet();
echo $h->getName();

$p = new Pulsar();
echo $p->getName();