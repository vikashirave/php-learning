<?php

class Car
{
    // static function
    public static function name()
    {
        echo " my car";
        echo "<br>";
    }
}

Car::name(); // This is right approach


// method second
class Car1
{
    public function __construct()
    {
       self::name01(); // static method use "self::function name"
    }

    public static function name01()
    {
        echo "My friends car";
    }
}

new Car1;