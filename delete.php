<?php

   require 'db/conn.php';

    if(!$_GET['id'])
      {
         echo "Error";
      }
     else
      {
          $id = $_GET['id'];
          $result = $crud->deleteRecord($id);

         if($result == true)
          {
            header('location: viewrecord.php');
          }
      }
?>