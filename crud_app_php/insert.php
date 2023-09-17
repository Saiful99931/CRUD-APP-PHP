
<?php

//Insert Data to Database
$connection = mysqli_connect('localhost','root', '', 'users' );
  
if(isset($_POST['submit'])){
  $name  = $_POST['uname'];
  $email  = $_POST['uemail'];
   $pass = $_POST['upass'];

     $sql = "INSERT INTO user_info (username, email, password) VALUES ('$name ', '$email', '$pass')";

     $query = mysqli_query($connection, $sql);
       
}

?>


<!DOCTYPE html>
<!-- for insert data  -->
<html lang="en">
<head>
 
  <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
  <title>Crud App PHP/Insert page</title>
  
</head>
<body>
  <div class = "container p-4 shadow">
    <h3 class="text-center ">Student/Employee Information</h3>
    <div class="m-4 row row-cols-1">
<form action="" method="POST">
  Username :
<input type="text"  name = "uname" required> 
Email :  
<input type="email" name = "uemail" required>
Password : 
<input type="password" name = "upass">
<input type="submit"  name = "submit" class="btn-info m-2 rounded">
</form>
</div>

<div class="container text-center">
 
<a href="index.php">
<button class="rounded bg-info ">Go back</button></a>


</div>

  </div>


<script src="./bootstrap-5/js/bootstrap.min.js"></script>
</body>
</html>