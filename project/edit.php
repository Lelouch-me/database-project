<?php
        include("connect.php");
$user_id = $_GET['id'];
$get_user_id = "select * from user where User_ID = '$user_id'";

$query = mysqli_query($conn,$get_user_id );

$rows = mysqli_fetch_assoc($query);

 ?>
 <form class="" action="./user_update.php?id=<?php echo $rows['User_ID'] ?>" method="post">
   User Name: <input type="text" name="username" value="<?php echo $rows['Name']; ?>">
   E-Mail   : <input type="email" name="email" value="<?php echo $rows['Email']; ?>">
   Phone    : <input type="text" name="pnum" value="<?php echo $rows['Phone_Number']; ?>">
   <input type="submit" name="update" value="Update">
 </form>
