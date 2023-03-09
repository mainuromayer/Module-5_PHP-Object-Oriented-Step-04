<?php
# Discussion of Interfaces

/** Interface এর কাজ হল -
 * Interface কে implements করা লাগবে, extends করা যাবে না।
 * Interface এর মেইন class এ body/scope থাকবে না, কিন্তু যে ক্লাস এ implements করব সেখানে body/scope থাকতে হবে।
 * একটা Interface আর একটা Interface কে extends করতে পারবে।
 * class কিন্তু interface কে extends করতে পারবে না।
 *  */ 

interface BaseAnimal{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

class Human implements BaseHuman{
    function canTalk(){}
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

$human = new Human();

# instance check
echo $human instanceof Human;
echo "\n"; 
echo $human instanceof BaseHuman; 
echo "\n"; 
echo $human instanceof BaseAnimal; 
echo "\n"; 
echo $human instanceof Animal; 
echo "\n"; 

/** 
 * এই পুরো কন্সেপ্টটাকে বলা হয় polymorphism(বহুরূপী)
 * এখানে একটা object আরেকটা object কে রিপ্রেসেন্ট করে, এবং নতুন method যোগ করে।
 *  */

$cat = new Animal();
echo $cat instanceof Human;
echo "\n"; 


#--------------------------------------------

abstract class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am eating";
    }
}

class Men extends AbstractHuman{
    function canTalk(){}
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function run(){}
}

$human = new Men();