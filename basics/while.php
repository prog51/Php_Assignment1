<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>while</title>
 
</head>
<body>

<h1>While loop</h1>
  <?php
  
  $grade = 0;

  
  while($grade < 20)
   {
        echo "<p>I am less the 20</p>";
        $grade++;
   }
  ?>

<h1>Do-While loop</h1>
  <?php
  
  $grade = 0;

  
  do{
        echo "<p>I am less the 20</p>";
        $grade++;
   }while($grade < 20)
  ?>
</body>