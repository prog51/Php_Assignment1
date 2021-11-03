<?php $title = 'View Record';
  require('includes/header.php');
  require_once 'includes/auth_check.php';
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
  $image = $result['avatar_path'];

?>

<div class="container">
    <div class="row">
      <div>  
          <div class="col-md-3">
                <div>
                    <img src="<?php echo empty($image) ? "upload/placeholder.png" : $image;   ?>" class = "rounded" width = "150" height= "150"/>
                    
                </div>
                <div>
                   <span><?php echo $name; ?></span>
                </div>

            </div>
            <div class="col-md-7">
            
           </div>

        </div>
    </div>
</div>

<?php

require('includes/footer.php');


?>