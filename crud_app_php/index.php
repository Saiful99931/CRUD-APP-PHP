
<?php

//Insert Data to Database
$connection = mysqli_connect('localhost','root', '', 'users' );
  
if(isset($_POST['submit'])){
  $name  = $_POST['uname'];
  $email  = $_POST['uemail'];
   $pass = $_POST['upass'];

     $sql = "INSERT INTO user_info (username, email, password) VALUES ('$name ', '$email', '$pass')";

     $query = mysqli_query($connection, $sql);
     if(!$query){
      echo "Error".mysqli_error($connection);
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
<input type="text"  name = "uname" required> 
Email :  
<input type="email" name = "uemail" required>
Password : 
<input type="password" name = "upass">
<input type="submit"  name = "submit" class="btn-info m-2 rounded">
</form>
</div>

  </div>


<script src="./bootstrap-5/js/bootstrap.min.js"></script>
</body>
</html>


<?php
//Show data to database
$connection = mysqli_connect('localhost','root', '', 'users' );

$selct = "SELECT * FROM user_info";

  $query2 = mysqli_query($connection, $selct);
  
?>
  <!DOCTYPE html>
  <html lang="en">
<head>
 
  <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
  <title>Crud App PHP</title>
  
</head>
<body>
  <div class="container p-4 mt-4">
<table class="table table-bordered table-striped">
<tr>
  <th>Id</th>
  <th>Name</th>
  <th>Email</th>
  <th>Password</th>
  <th> Insert Data</th>
  <th>Show Data</th>
  <th>Update Data</th>
  <th>Delete</th>
</tr>

  


  
<?php
  while($data = mysqli_fetch_assoc($query2)){
  $id  =  $data['id'];
  $name2 =  $data['username'];
  $email2 =  $data['email'];
  $pass2 =  $data['password'];
  ?>
  
  <tr>
  <td> <?php echo $id ?></td>
    <td> <?php echo $name2 ?></td>
    <td> <?php echo $email2 ?></td>
    <td> <?php echo $pass2 ?></td>
       <td><a href="insert.php" class="text-decoration-none">Insert Data</a></td>
    <td> <a class="text-decoration-none" href="./view.php">View </a></td>
    <td> <a class="text-decoration-none" href="./edit.php?editid=<?php echo $id ?>">Update Data </a></td>
    <td> <a class="text-decoration-none" href= "./delete.php?deleteid= <?php echo $id ?>"> Delete </a></td>
  
  </tr>

  <?php

  
  }
?>
 

</table>
  </div>



<script src="./bootstrap-5/js/bootstrap.min.js"></script>
</body>
  </html>


 


