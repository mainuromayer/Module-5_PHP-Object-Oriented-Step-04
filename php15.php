<?php
# Creating constants in classes

# constant লেখার ২টা way -
# 1st way -
define("OK", 123);
echo OK;

# 2nd way -
const CITY = "Dhaka\n";
echo CITY;






#-----------------------------------------

# class এ আমরা 1st way টা use করতে পারব না 2nd way টা use করতে পারব
class MyClass{
    const CITY = "Dhaka\n";

    function sayHi(){
        echo "Hi From " . self::CITY; # 1st way call from function
        echo "Hello From " . $this::CITY; # 2nd way call from function
    }
}

$m = new MyClass();
$m->sayHi();

# constant access 2 way -
echo $m::CITY;  # 1st way
echo MyClass::CITY; # 2nd way

# constant সবসময় static way তে থাকে