<?php


  //**This is for development purposes
  /*$host = '127.0.0.1';
   $db = 'attendee_db';
   $user = 'root';
   $password = '';
   $charset = 'uft8mb4';*/

   
   $host = 'remotemysql.com';
   $db = 'b8D7YicFIR';
   $user = 'b8D7YicFIR';
   $password = '6GmFd4eKp8';
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
     require_once 'users.php';

     $crud = new crud($pdo);
     $user = new user($pdo);

     $user->InsertUser('admin','password');

?>