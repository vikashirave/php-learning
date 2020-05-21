<?php
//if statement
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}

echo "<br>";
echo "<br>";
//if-else

$age = 18;

if($age>=18)
{
    echo"eligible for voting";
}
else
{
    echo "not eligible for voting";
}

//else_if

echo "<br>";
echo "<br>";

$per=50;

if($per >= 90)
    {
        printf("Grade A");
    }
    else if($per >= 80)
    {
        printf("Grade B");
    }
    else if($per >= 70)
    {
        printf("Grade C");
    }
    else if($per >= 60)
    {
        printf("Grade D");
    }
    else if($per >= 40)
    {
        printf("Grade E");
    }
    else
    {
        printf("Grade F");
    }

?>