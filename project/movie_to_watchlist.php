<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: ./movie.php');
}
$email = $_SESSION['email'];
include("connect.php");

if (isset($_POST['add'])) {
  $movie= $_POST['moviename'];
  if($movie  == '')
  {
    echo "<script>alert ('Please enter Movie Name') </script>";
    echo "<script>window.open('./watchlist.php','_self') </script>";
    exit();
  }

$id ="select User_ID from user where Email = '$email'";
$get_id = mysqli_query($conn,$id );
echo $get_id;

$insert = "insert into watchlist(User_id,Movie_Name) value( $get_id,'$movie')";


$query = mysqli_query($conn,$insert );

if ($query) {
  header('Location:'.'watchlist.php');
}
else {
  echo "Something went Wrong!!!";
}
}
 ?>
