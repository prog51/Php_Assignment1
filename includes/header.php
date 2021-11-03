<?php  include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  echo $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
   <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     
    </button>-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="index.php">Simo.com</a>
      <ul class="navbar-nav mr-auto me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewrecord.php">View Records</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP Basics and syntax
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="basic.php?v=IF">If Statement Example</a></li>
            <li><a class="dropdown-item" href="basic.php?v=DT">Date Example</a></li>
            <li><a class="dropdown-item" href="basic.php?v=FN">functions Example</a></li>
            <li><a class="dropdown-item" href="basic.php?v=LP">loops Example</a></li>
            <li><a class="dropdown-item" href="basic.php?v=STR">strings Example</a></li>
            <li><a class="dropdown-item" href="basic.php?v=SWT">switchs Example</a></li>
            <li><a class="dropdown-item" href="basic.php?v=WHL">whiles Example</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edit.php>Edit</a>
        </li>
      </ul>
      <div class="navbar-nav ml-auto">
        <?php if(!isset($_SESSION['id'])){ ?>
            <a href="login.php" class="nav-item nav-link">Login<span class="sr-only">(current)</span></a>
        <?php 
        
          } else {
                    
        ?>
            <span>Hello <?php echo $_SESSION['username']; ?>  </span>
           <a href="logout.php" class="nav-item nav-link">Logout<span class="sr-only">(current)</span></a>
           <?php  } ?>
      </div>
    </div>    
    
  </div>

  <div class="navbar-nav"></div>
</nav>
<div class="container">