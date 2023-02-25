<?php
# এখানে আমরা ১ টা class এর multiple object বানালাম -
# __construct function এর মাধ্যমে class এর ভিতরের variable গুলোর মান বাইরে থেকে argument হিসেবে নিয়ে এসে __construct function এর parameter এ পাস করিয়ে সেগুলোর মান সেট করলাম - তারপরে function গুলোতে সেই variable এর মান ব্যবহার করলাম।

class Human{
    public $name;
    public $age;

    public function __construct($personName, $personAge=0){
        // echo "New Human Object is Created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(){
        echo "Salam \n";
        $this->sayName();
    }

    function sayName(){
        if($this->age){
            echo "My Name is {$this->name}, I am {$this->age} years old\n";
        }else{
            echo "My Name is {$this->name}, I don't know how old I am\n";
        }
    }
}

$h1 = new Human("Rubel", 21);
// $h1->name = "Rubel";
$h1->sayHi();
echo "\n\n";

$h2 = new Human("Omayer", 22);
$h2->sayHi();
echo "\n\n";

$h3 = new Human("Rakhi");
$h3->sayHi();
echo "\n\n";

