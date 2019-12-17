<?php include_once("pages/header.php"); ?>

<?php echo isset($message);
?>  <br>
 
  <div class="container">
     <div class="row">
    <div class="col-md-9">
      <input class="form-control" id="myInput" type="text" placeholder="Search.."> 
    </div>
    <div class="col-md-3">
      <a href="addstudent.php"><button type="button" class="btn btn-danger">ADDSTUDENT</button></a>
    </div>
  </div>
  </div>
  
  

  <br>
           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Roll number</th>
        <th>Phone number</th>
        <th>Address</th>
        <th>Attendance</th>

      </tr>

      <tr>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
        <td>Roll number</td>
        <td>Phone number</td>
        <td>Address</td>
        <td>Attendance</td>

      </tr>
      <tr>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
        <td>Roll number</td>
        <td>Phone number</td>
        <td>Address</td>
        <td>Attendance</td>

      </tr>
    
      
    </thead>
    </tbody>
  </table>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



      <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



<div class="jumbotron text-center" style="margin-bottom:0">
  <a href="logout.php"><button type="button" class="btn btn-danger">LOGOUT</button></a>


</div>




