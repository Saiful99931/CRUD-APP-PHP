<?php
// for delete data

$connection = mysqli_connect('localhost','root', '', 'users' );
$id = $_GET['deleteid'];

$sql = "DELETE FROM `user_info` WHERE id = $id";

$query = mysqli_query($connection, $sql);

if(!$connection){
  echo "Is not connection".mysqli_error($connection);
}else{
  header('location:index.php');
}


?>