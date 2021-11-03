<?php

    $title = "User Login";

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
     $username=strtolower(trim($_POST['username']));
     $password = $_POST['password'];
     $new_password = md5($password.$username);

     $results = $user->getUser($username,$new_password);

     if(!$results)
      {
          echo "<div class = 'alert alert-danger'>Username or Password is incorrect! Please try again.</div>";
      }
     else
      {
         $_SESSION['username'] = $username;
         $_SESSION['id'] = $results['id'];

         header("location: viewrecord.php");
      }
  }



?>
<h1><?php  echo  $title; ?></h1>
<form action = "<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
   <table class="table table-sm">

     <tr>
        <td>
          <label for="username">Username: *</label> 
           <td><input type="text" name="username" class="form-control" id="username" value="<?php  if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username']; ?>"/></td>
          <?php  if(empty($username) && $_SERVER['REQUEST_METHOD']=='POST') echo "<p class='text-danger'>$username_error</p>"; ?>
       </td>
      <tr>

      <tr>
             <td><lable for="password">Password: *</label></td>
             <td><input type="password" name = "password"/></td>
     </tr>
   </table><br/><br/>
   <input type="submit" value="login" class="btn btn-primary btn-block" />
   <a href="#">Forgot Password</a>
</form>

<?php include_once('includes/footer.php'); ?>