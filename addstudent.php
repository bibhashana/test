<?php include_once("pages/header.php"); ?>

<?php

  if(isset($_POST['first_name'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql = "INSERT INTO student (first_name, last_name, email, roll, phone, address)
VALUES ($first_name, $last_name, $email, $roll, $phone, $address)";
if (mysqli_query($con, $sql)) {
   $message =  "New record created successfully";
} else {
    $message = "Error: " . $sql . "<br>" . mysqli_error($con);
}
    header("location: student.php");
}
    ?>

<div class="row">
 <div class="container">
   <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter first name" name="first_name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter last name" name="last_name"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Roll Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter roll number" name="roll" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number" maxlength="10" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile number" name="phone" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="address" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-warning">Reset</button>
  </div>
    
</form>
 </div>
</div>






<div class="jumbotron text-center" style="margin-bottom:0">
  <a href="logout.php"><button type="button" class="btn btn-danger">LOGOUT</button></a>
 


</div>




