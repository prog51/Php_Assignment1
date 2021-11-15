!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String</title>
 
</head>
<body>

<h1>PHP  String Manipulation</h1>
  <?php

     $phrase1 = "Student who came late";
     $phrase2 = "get forty lashes";
     $name = "Dilland Dickson";

     echo $phrase1 . ", " . $name . " " . $phrase2 ; 

     echo 'Uppercase first letter: ' . ucfirst($name) . "</br>";
     echo 'Uppercase first of each words: ' . ucwords($name) . "</br>";
     echo 'Uppercase first letter: ' . strtolower("I AM SAM") . "</br>";

     echo "<hr/>";

     echo 'Repeat String: ' . str_repeat('a',4) . '<br/>';

     echo 'Get position of string: ' . strpos($name, 's') . "<b/>";

     echo 'Find character "R" ' . strchr($name,"R");

     echo 'String lenght: ' . strlen($name) . '<br/>';


  ?>
</body>