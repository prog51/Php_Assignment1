<?php
$title = 'Home';
  require('includes/header.php');
  require('db/conn.php');
?>


<table class = "table">
<tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date Of Birth</th>
      <th>Email</th>
      <th>Contact Number</th>
      <th>specialty</th>
  </tr>
 <?php

 $result = $crud->getAttendee();
 while($row = $result->fetch(PDO::FETCH_ASSOC) )
    {
     $id = $row['attendee_id'];
     $fname = $row['firstname'];
     $lname = $row['lastname'];
     $DOB = $row['DOB'];
     $email = $row['email'];
     $contactnumber = $row['contactnumber'];
     $specialty = $row['Name'];

  ?>

<tr>
      <td><?php echo $fname;  ?></td>
      <td><?php echo $lname;  ?></td>
      <td><?php echo $DOB; ?></td>
      <td><?php echo $email;  ?></td>
      <td><?php echo $contactnumber;  ?></td>
      <td><?php echo $specialty;  ?></td>
      <td><a href="view.php?id=<?php echo $id ?>" class="btn btn-primary">View</a></td>
  </tr>
<?php

 }
 ?>

</table>

<?php
    require('includes/footer.php');
?>