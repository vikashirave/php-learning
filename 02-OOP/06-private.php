<?php
/**
 * public - the property or method can be accessed from everywhere. This is default
 * protected - the property or method can be accessed within the class and by classes derived from that class
 * private - the property or method can ONLY be accessed within the class
 */
class Animal {

public $name;
private $type;

public function __construct($name)
{
    $this->name = $name;
}

public function setType($type)
{
    if ($type == 'Dog') {
        $this->type = $type;
    } else {
        echo 'Hey, I told you to have Dog only';
    }
}

public function getType() // If this function is private then it will throw an error
{
    return $this->type;
}
}

$animal = new Animal('Gattu');

$animal->setType('Dog');

echo $animal->name . ' is a ' . $animal->getType().'<br>';
?>