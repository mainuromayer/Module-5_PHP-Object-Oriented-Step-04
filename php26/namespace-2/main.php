<?php

namespace Astronomy;
// namespace Astronomy\Planets;

# -----------------------------------

include "planet.php";
include "earth.php";

# -----------------------------------


// $planet = new Planets\Planet(); # unqualified
// $planet = new \Astronomy\Planets\Planet(); # qualified

// $planet = new Planet();

# -----------------------------------

$planet = new Planets\Earth(); 


$planet->getName();