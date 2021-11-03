<?php
$title = 'Home';
  require('includes/header.php');
  require('db/conn.php');
?>

   <h1>Register Today for our Conference</h1>

   <form method = "post" action="success.php" enctype="multipart/form-data" class="row g-3">
   <div class="col-md-6">
    <label for="inputfirtName4" class="form-label">First Name</label>
    <input required type="text" class="form-control" name = "fname" id="inputEmail4">
  </div>

  <div class="col-md-6">
    <label for="inputLastName4" class="form-label">Last Name</label>
    <input required type="text" class="form-control" name = "lname" id="inputPassword4">
  </div>

  <div class="col-md-6">
    <label for="email4" class="form-label">Email</label>
    <input required type="email" class="form-control" name = "email" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Date of Birth</label>
    <input required type="text" class="form-control" name="dob" id="dob">
  </div>

  <div class="col-md-6">
    <label for="inputZip" class="form-label">Contact</label>
    <input required type="text" class="form-control" name="contact" id="contact">
  </div>

  
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Specialty</label>
    <select class ="form-control" id="specialty" name="specialty">
      <?php
          $res = $crud->getSpecialties();
          while($row = $res->fetch(PDO::FETCH_ASSOC)){ 
            $id = $row['specialty_id'];
            $value = $row['Name'];        
        ?>
        <option value="<?php echo $id; ?>"><?php  echo $value; ?></option>
      
        <?php } ?>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input required class="form-check-input" type="checkbox" name = "agree" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>   
  </div>

   <div class="col-md-12">      
       <div class="custom-file">
          <input type="file" accept="image/*" name = "avatar"  class ="custom-file-input"  id="avatar" >
          <label class="custom-file-label" for="avatar">choose File</label>
       </div>
    </div>

  <div class="col-md-12">
    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</form>
  <?php

  require('includes/footer.php');


?>