<!DOCTYPE HTML>  
<html>
<head>
 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>  

<?php
session_start();

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input ($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input ($_POST["website"]);
    $comment = test_input ($_POST["comment"]);
    $gender = test_input (isset($_POST["gender"])?$_POST["gender"]:'');
    
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["website"] = $website;
    $_SESSION["comment"] = $comment;
    $_SESSION["gender"] = $gender;
} else {
    if (isset($_SESSION["name"])) {
        $name = $_SESSION["name"];
    }

    if (isset($_SESSION["email"])) {
        $email = $_SESSION["email"];
    }

    if (isset($_SESSION["website"])) {
        $website = $_SESSION["website"];
    }

    if (isset($_SESSION["comment"])) {
        $comment = $_SESSION["comment"];
    }

    if (isset($_SESSION["gender"])) {
        $gender = $_SESSION["gender"];
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class ="bg-purple-500">
<h2 class ="font-bold text-3xl text-black-700 p-4">PHP Form Validation Example</h2>
<form class="block text-black-400 font-bold  mb-1 md pr-4 p-4" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input 
  value="<?=$name?>"
  class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-60 py-2 px-4 text-black-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="name">
  <br><br>
  E-mail: <input 
  value="<?=$email?>"
  class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-60 py-2 px-4 text-black-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="email">
  <br><br>
  Website: <input
  value="<?=$website?>"
  class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-60 py-2 px-4 text-black-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="website">
  <br><br>
  Comment: <textarea class="bg-gray-100 appearance-none border-2 border-gray-300 rounded w-60 py-2 px-4 text-black-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" name="comment" rows="5" cols="40"><?=$comment?></textarea>
  <br><br>
  Gender:
  <input class ="bg-blue" type="radio" name="gender" value="female" <?=$gender=='female'?'checked':''?>> Female
  <input type="radio" name="gender" value="male" <?=$gender=='male'?'checked':''?>> Male
  <input type="radio" name="gender" value="other" <?=$gender=='other'?'checked':''?>> Other
  <br><br>
  <input class="bg-orange-400 font-bold appearance-none border-2 border-orange-400 rounded w-60 py-2 px-4 text-black-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="submit" name="submit" value="Submit">  
</form>
</div>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
