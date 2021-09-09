<?php
        include("connect.php");
$user_email = $_GET['email'];
$id ="select User_ID from user where Email = '$user_email'";
$get_id = mysqli_query($conn,$id );
$delete_movie = "delete from user where User_ID = $get_id ";

$query = mysqli_query($conn,$delete_movie );

if ($query) {
  header('Location:'.'watchlist.php');
}
else {
  echo "Something went Wrong!!!";
}
 ?>
