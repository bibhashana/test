<?php include('db.php'); 
if(isset($_SESSION['logincheck'])) {
  header("location: admin_page.php");
  
}
?>

<?php

  if(isset($_POST['uname'])&&isset($_POST['pswd'])){
$uname = $_POST['uname'];
$pswd= $_POST['pswd'];
$query= mysqli_query($con, "SELECT * FROM user WHERE username = '$uname' and password = '$pswd'");
$result = mysqli_fetch_array($query);
if($result){
$_SESSION['logincheck'] = $result;

  header('location: admin_page.php');
} else {
  $error= "Username and password does not match";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
  


<div class="container">
  <h2>LOG IN HERE</h2>
  <span class="text-danger">
  <?php if(isset($error)){
  echo $error;
} ?>
</span>


<div class="alert alert-danger">
    <strong>ALERT!</strong> <br> please fill the spaces
  </div>

  <div class="container">
  <div class="col-md-9">
    this is col -9  </div>
    <div class="col-md-3 clear-both">
      hello frm col 3
    </div>

            
  <img src="images/image1.jpg" style=" height:100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;"> 


  <form method="POST" action="" class="was-validated">
    <div class="form-group" style="position: absolute;
  left: : 0;
  
  max-width: 500px;
  padding: 16px;">



    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text "  class="form-control" id="uname" placeholder="Enter username" name="uname" required>

      
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      
    </div>


    <div class="form-group form-check">
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>


</body>
</html>






