<?php
include('db.php'); 
unset($_SESSION['logincheck']);
header('location: index.php');
?>