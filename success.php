<?php
$title = 'Success';

  require 'db/conn.php';
  require('includes/header.php');

  if(isset($_POST['submit']))
   {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $dob = $_POST['dob']; 
      $contact = $_POST['contact'];
      $specialties = $_POST['specialty'];

     // (:fname,:lname, :dob, :contact, :specialty)

     $orig_file = $_FILES["avatar"]["tmp_name"];
     $target_dir = "upload/";
     $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
     $destination = "$target_dir$contact.$ext";

     move_uploaded_file($orig_file,$destination);


      $isSuccess = $crud->insert($fname,$lname,$dob,$email,$contact,$specialties,$destination);
   }
   else
   {
     echo "VALUES NOT SENT";
   }
?>

  <h1><?php
  if($isSuccess == true)
  {
    
    echo "<h1>SUCCESS</h1>";
    
  }
  else if($isSuccess == false)
  {
    echo "<h1>NOT SUCCESS</h1>";
  }

    ?>

  <div class="card" style="width: 18rem;">
  <img src="<?php echo $destination; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['fname']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php

require('includes/footer.php');


?>