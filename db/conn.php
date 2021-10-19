<?php

   $host = '127.0.0.1';
   $db = 'attendee_db';
   $user = 'root';
   $password = '';
   $charset = 'uft8mb4';

   $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

   try
     {
         $pdo = new PDO($dsn,$user,$password);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } 
     catch(PDOException $error)
     {
        throw new PDOException($error->getMessage()); 
     }

     require_once 'crud.php';

     $crud = new crud($pdo);

?>