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

   $date = getdate();

   echo "Today date is " . $date . "<br/>";
   echo $date['mday'];
   echo $date['mon'];
   echo $date['year'];


?>

</body>