<?php
class Student
{
    public $name;
    public $city;

    function __construct($name, $city)
    {
        $this->name=$name;
        $this->city=$city;   
    }

   function get_name()
   {
      return $this->name;
   }

   function get_city()
   {
       return $this->city;
   }
}

$s = new Student("vikas", "Pune");

echo "Name: " . $s->get_name();
echo "<br>";
echo "City: " . $s->get_city();

?>
