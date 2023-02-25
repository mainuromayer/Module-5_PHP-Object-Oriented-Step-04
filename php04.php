<?php

# oop access modifier - public, private, protected


# class এর মধ্যে কোন poperty বা method কে public রাখলে, সেটা সবাই access করতে পারবে, class এর বাইরে থেকেও এবং class এর ভিতর থেকেও।

# class এর মধ্যে কোন poperty বা method কে private রাখলে, সেটা সবাই access করতে পারবে না, শুধু class এর ভিতর থেকে access করতে পারবে।

class Fund{
    private $fund;

    function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
        $this->deductFund(0);
    }

    private function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is {$this->fund}";
    }
}

$ourFund = new Fund(100);
// $ourFund->fund = 50;

$ourFund->getTotal();
echo "\n";

$ourFund->addFund(10);
$ourFund->getTotal();
echo "\n";

// $ourFund->deductFund(5);
// $ourFund->getTotal();