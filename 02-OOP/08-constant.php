<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;//within the class we access constant using self
                                //syntax: self::constant_name;
  }
 
}

echo Goodbye::LEAVING_MESSAGE;//for outside the class we can access constant using scope resolution operator(::)
                              //syntax: class_name::constant_name;
echo"<br>";
echo"<br>";
$goodbye = new Goodbye();
$goodbye->byebye();
?>


