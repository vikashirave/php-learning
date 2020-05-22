<?php

class Fruit {
    public $name;
    public $type = 'Juicy';
}


$fruit1 = new Fruit();

$fruit1->name = 'Mango';

echo $fruit1->name . ' is of type ' . $fruit1->type;