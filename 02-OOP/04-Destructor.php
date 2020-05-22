<?php
class Student {
  // Properties
  var $name;
  var $city;

  // Methods
  function __construct($name, $city) {
    $this->name = $name;
    $this->city = $city; 
  }
  function __destruct() {
    echo "The Student Name is {$this->name} and the city is {$this->city}."; 
  }
}

$apple = new Student("Vikas", "Pune");
?>