<?php

# Trait - 
# আমাদের যখন একাধিক parent class থেকে ১ টা child class এ inherit করার প্রয়োজন পড়বে তখন আমরা trait ব্যবহার করব।

/* 

trait TraitName{
    // some text ...
}

class MyClass{
    use TraitName;
}

*/

trait color_1{
    public function redColor(){
        echo "red";
    }
}

trait color_2{
    public function greenColor(){
        echo "green";
    }
}

class Color{
    use color_1;
    use color_2;
}

$color = new Color();
$color->redColor();
echo PHP_EOL;
$color->greenColor();
