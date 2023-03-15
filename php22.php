<?php

# Detailed discussion on early and late binding

class Planet{
    static function echoName(){
        // echo self::getName();  # early binding
        echo static::getName();  # let binding
    }
    static function getName(){
        return "Planet\n";
    }
}

class Earth extends Planet{
    // static function echoName(){
    //     echo "Earth";
    // }

    static function getName(){
        return "Earth\n";
    }
}


// Planet::echoName();

Earth::echoName();


/**
 * -------------------------------------------------
 * early binding :
 * এখানে parent class এর মধ্যে static function এ self:: থাকলে, তাকে যদি ও child class থেকে কল করা হয়, সে parent class এর মধ্যে যদি কল খুঁজে পায় সেখান থেকে রিটার্ন করে দিবে।
 
 * -------------------------------------------------
 * let binding :
 * এখানে parent class এর মধ্যে static function এ static:: থাকলে, তাকে যদি child class থেকে কল করা হয় এবং child class থেকেই সে যদি কল খুঁজে পায় তাহলে সেখান থেকে রিটার্ন করবে।
 * 
 */


