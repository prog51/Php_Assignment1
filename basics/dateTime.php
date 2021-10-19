<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date</title>
 
</head>
<body>

<?php
   $date = getdate();

   echo "Today date is " . "<br/>";
   echo $date['mday'];
   echo $date['mon'];
   echo $date['year'];

   echo  time() . "<br/>";

   print date("m/d/y G.i:s<br>", time()) . '<br/>';
   print "Today is ";
   print date("j of F Y, \a\\t g.i a", time());



?>

</body>