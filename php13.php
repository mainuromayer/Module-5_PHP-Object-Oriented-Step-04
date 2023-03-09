<?php
# Discussing static method overrides in child classes
/**
 * static method ওয়ালা class কে extends করি, এর পর method অভাররাইড করি তাহলে সেখানে ও static দিতে হবে।
 */

class A {
    static function sayHi() {
        echo "Hi From A\n";
    }
}

class B extends A {
    static function sayHi() {
        echo "Hi From B\n";
        parent::sayHi();
    }
}

B::sayHi();