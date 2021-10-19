<?php
$title = 'Success';
  require('includes/header.php');
  require 'db/conn.php';

  if(isset($_POST['submit']))
   {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $dob = $_POST['dob']; 
      $contact = $_POST['contact'];
      $specialties = $_POST['specialty'];

     // (:fname,:lname, :dob, :contact, :specialty)

      $isSuccess = $crud->insert($fname,$lname,$dob,$email,$contact,$specialties);
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
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['fname']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php

require('includes/footer.php');


?>