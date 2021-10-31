<?php
    $title = 'Edit Post';
    require('includes/header.php');
    require('db/conn.php');

        if(isset($_POST['submit']))
        {
            $id = $_POST['atten_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $dob = $_POST['dob']; 
            $contact = $_POST['contact'];
            $specialties = $_POST['specialty'];

            $result = $crud->UpateRecord($id,$fname,$lname,$dob,$email,$contact,$specialties);

            if($result)
              {
                  header('location: viewrecord.php');
              }
              else{

                echo "error";
              }
        }
      else
        {
           //echo "error";
           include 'includes/errorMessage.php';
        }

?>