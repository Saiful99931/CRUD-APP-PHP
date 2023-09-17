<div class="container">
 
 <a href="index.php">
 <button class="rounded bg-info">Go back</button></a>
 
 </div>

 <?php
//Update data.
$connection = mysqli_connect('localhost','root', '', 'users' );

  $id =$_GET['editid'];
   $read = "SELECT * FROM user_info WHERE id = $id";
  $query1 = mysqli_query($connection, $read);

  $row = mysqli_fetch_array($query1);

 
  if(isset($_POST['update'])){
    $name = $_POST['uname'];
   $email =  $_POST['uemail'];
    $pass = $_POST['upass'];

    $sql = "UPDATE user_info SET username = '$name', email = '$email', password = '$pass' Where id = $id";

    $query = mysqli_query($connection, $sql);

    if(!$query){
      echo "Data is not update".mysqli_error($connection);
    }else{
      header('location:index.php');
    }
  }


 
  
?>




 <!DOCTYPE html>
<!-- for insert data  -->
<html lang="en">
<head>
 
  <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
  <title>Crud App PHP</title>
  
</head>
<body>
  <div class = "container p-4 shadow">
    <h3 class="text-center ">Student/Employee Information</h3>
    <div class="m-4 row row-cols-1">
<form action="" method="POST">
  Username :
<input type="text" value= "<?php echo $row['username']?>" name = "uname" required> 
Email :  
<input type="email" value= "<?php echo $row['email']?>" name = "uemail" required>
Password : 
<input type="password" value= "<?php echo $row['password']?>" name = "upass">
<input type="submit"  name = "update" class="btn-info m-2 rounded">
</form>
</div>

  </div>


<script src="./bootstrap-5/js/bootstrap.min.js"></script>
</body>
</html>