<?php $title = 'View Record';
  require('includes/header.php');
  require('db/conn.php');
  
  
  if(isset($_GET['id']))
  {
      $result = $crud->getAttendeeDetail($_GET['id']);
  }
  else
  {
    header('index.php');
  }

  $name = $result ['firstname'] . ' ' . $result ['lastname'];

?>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <span>Name:</span>
            <span><?php echo $name; ?></span>
        </div>
        <div class="col-md-3">
            <div></div>
        </div>
    </div>
</div>

<?php

require('includes/footer.php');


?>