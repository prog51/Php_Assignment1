<?php
$title = 'basics';
  require('includes/header.php');
  require('db/conn.php');
?>


<?php

   if($_GET['v'] == "IF")
   {

        require('basics/if_statement.php');
   }

   if($_GET['v'] == "DT")
   {

        require('basics/dateTime.php');
   }

   if($_GET['v'] == "FN")
   {

        require('basics/function.php');
   }

   if($_GET['v'] == "LP")
   {

        require('basics/loop.php');
   }
   if($_GET['v'] == "STR")
   {

        require('basics/string.php');
   }
   if($_GET['v'] == "SWT")
   {

        require('basics/switch.php');
   }
   if($_GET['v'] == "WHL")
   {

        require('basics/while.php');
   }
?>