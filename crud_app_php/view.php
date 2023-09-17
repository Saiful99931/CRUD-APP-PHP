

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
<div class="container">
 
 <a href="index.php">
 <button class="rounded bg-info">Go back</button></a>
 
 </div>

  <div class="container p-4 mt-4">
    <h2 class="text-center">Student Information</h2>
<table class="table table-bordered table-striped">
<tr>
  <th>Id</th>
  <th>Name</th>
  <th>Email</th>
  <th>Password</th>
 
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
         
  </tr>

  <?php

  
  }
?>
 

</table>
  </div>

  

<script src="./bootstrap-5/js/bootstrap.min.js"></script>
</body>
  </html>





