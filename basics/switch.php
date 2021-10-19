<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
 
</head>
<body>

  <?php

     $grade  = 'A';
    switch($grade)
      {
          case 'A':
            echo '<h2 style="color:green">You are the boss</h2>';
            break; 
        case 'B':
             echo '<h2 style="color:blue">You are the Manager</h2>';
             break; 
          default:
              echo '<h2 style="color:red;">You are a bum</h2>';
              break;
      }

  ?>
</body>