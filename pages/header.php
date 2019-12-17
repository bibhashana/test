<?php include('db.php'); 
if(!isset($_SESSION['logincheck'])) {
  header("location: index.php");
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin's page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
 <h2>WELCOME  <?php echo $_SESSION['logincheck']['username']?></h2><br>
</div>
<br>

<div class="container">
  
</div>



 

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="student.php">Student's details</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="teacher.php">Teacher's details</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Link</a>
    </li>
    
  </ul>
</nav>
