<?php
$title = 'Edit';
  require('includes/header.php');
  require_once 'includes/auth_check.php';
  require('db/conn.php');


  if(!isset($_GET['id']))
    {
       echo "Error";
    }
   else
      {
         $id = $_GET['id'];
         $record = $crud->getAttendeeDetail($id);
      }
?>

   <h1>Edit Record</h1>

   <form method = "post" action="editpost.php" class="row g-3">
    <input type="hidden" name = "atten_id" value="<?php echo $record['attendee_id']; ?>" />
   <div class="col-md-6">
    <label for="inputfirtName4" class="form-label">First Name</label>
    <input type="text" class="form-control" Value = "<?php  echo $record['firstname']; ?>" name = "fname" id="inputEmail4">
  </div>

  <div class="col-md-6">
    <label for="inputLastName4" class="form-label">Last Name</label>
    <input type="text" class="form-control" Value = "<?php  echo $record['lastname']; ?>" name = "lname" id="inputPassword4">
  </div>

  <div class="col-md-6">
    <label for="email4" class="form-label">Email</label>
    <input type="email" class="form-control" Value = "<?php  echo $record['email']; ?>"  name = "email" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" Value = "<?php  echo $record['DOB']; ?>" name="dob" id="dob">
  </div>

  <div class="col-md-6">
    <label for="inputZip" class="form-label">Contact</label>
    <input type="text" class="form-control" Value = "<?php  echo $record['contactnumber']; ?>" name="contact" id="contact">
  </div>

  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Specialty</label>
    <select class ="form-control" id="specialty" name="specialty">
      <?php
          $res = $crud->getSpecialties();
          while($row = $res->fetch(PDO::FETCH_ASSOC)){ 
            $id = $row['specialty_id'];
         ?>
        <option value="<?php echo $row['specialty_id']; ?>"  <?php if($record['specialty_id'] == $row['specialty_id'])  echo 'selected'; ?>><?php  echo $row['Name']; ?></option>
      
        <?php }
          
        ?>
    </select>
  </div>
  kuuyguygui gyui
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name = "agree" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <a href="viewrecord.php" class="btn btn-default">Back to List</a>
    <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
  </div>
</form>
  <?php

  require('includes/footer.php');


?>