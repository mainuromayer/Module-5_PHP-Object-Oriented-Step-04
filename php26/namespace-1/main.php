<?php

// include "planet.php";
// $planet = new Astronomy\Planet();
// $planet->getName();
# ....................
# it will work, but it not actual way


#-------
// include "planet.php";
// $planet = new \Astronomy\Planet();
// $planet->getName();
# ....................
# it will work, it is actual way


#---------------------------------------
// namespace Astronomy;
// include "planet.php";
// $planet = new Astronomy\Planet();
// $planet->getName();
# ....................
# it will not work, because it means that -
# $planet = new \Astronomy\Astronomy\Planet();


#-------
// namespace Astronomy;
// include "planet.php";
// $planet = new \Astronomy\Planet();
// $planet->getName();
# ....................
# it will work


#---------------------------------------
// include "planet.php";
// $planet = new \Astronomy\Planet();
// $planet->getName();

// new DateTime();
# ....................
# it will work, but it is not actual way


#-------
// namespace Astronomy;
// include "planet.php";
// $planet = new \Astronomy\Planet();
// $planet->getName();

// new DateTime();
# ....................
# it will not work, because it means that -
# new \Astronomy\DateTime();


#---------------------------------------
// namespace Astronomy;
// include "planet.php";
// $planet = new \Astronomy\Planet();
// $planet->getName();

// new \DateTime();
# ....................
# it will work, it is actual way


#---------------------------------------
