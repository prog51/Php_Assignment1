<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statement</title>
 
</head>
<body>

  <?php

     echo "<h2>If Statement</h2>";

     $grade = 80;

     if($grade >= 50)
     {
            echo "<h3 style= 'color:green;'> You have passed</h3>";
     }
     
    else
     {
            echo "<h3 style = 'color:green;'> You have passed</h3>";
     }

     $grade = 'A';

     if($grade == 'A')
     {
              echo "<h3 style = 'color:green;'>You are the boss</h3>";
     }
     if($grade == 'B')
     {
              echo "<h3 style = 'color:blue;'>You are the Manager</h3>";
     }
     else
     {
              echo "<h3 style = 'color:red;'>You are a bum</h3>";
     }

  ?>
</body>