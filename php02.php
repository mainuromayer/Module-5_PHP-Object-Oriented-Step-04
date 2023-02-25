<?php
# Classes, Objects, Methods and Properties -

# class এর ভিতরে থাকে property + attribute
# class কে যখন আমরা use করি বা, initialize করি, তখন সেটা object হয়।
# এই oop(object oriented programming) করতে হয়।

/** 
 * class -> property (function) -> method (attribute)
 */


#-------------------------------------------------

# class সবসময় capital letter দিয়ে শুরু করতে হয় - এটা হচ্ছে naming convention
# function সবসময় camelCase দিয়ে লেখতে হয়
# class -
class Human{
    public $name;
    function sayHi(){
        echo "Salam \n";
        $this->sayName();
    }
    function sayName(){
        echo "His name is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow \n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof \n";
    }
}

#.....................
# object -
$h1 = new Human();
$h2 = new Human();
$c1 = new Cat();
$d1 = new Dog();

#.....................
$h1->name = "Karim \n\n"; // set operation
echo $h1->name;         // get operation

$h2->name = "Jamal";

#.....................
# how can access class method / object to call class function -
$h1->sayHi();
$h2->sayName();
$c1->sayHi();
$h1->sayHi();

#...........................
# object কে যে variable এ store করে রাখব - সে variable থেকে multiple variable বানিয়ে এবং variable এর মধ্যে value set করে ব্যবহার করতে পারব।
$h1->age = 22;
echo  $h1->age;



