<?php
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ./movie.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Watchlist</title>
  </head>
  <body>
    <h1>Your Watchlist</h1>
      <table>
        <thead>
          <tr>
            <th>Movie Name</th>
            <th>History</th>
          </tr>
        </thead>
       <?php
       $email= $_SESSION['email'];
         include("connect.php");
         $add_query= " select * from watchlist w join user u on w.User_id = u.User_ID where u.User_ID =  (select User_ID from user where Email like '$email')";
         $addmovie = mysqli_query($conn,  $add_query);
         while ($rows = mysqli_fetch_array($addmovie)) {
           $movie = $rows[2];
           $his = $rows[3];
           ?>
           <tr>
             <td><?php echo $movie  ?></td>
             <td><?php echo $his ?></td>
             <td> <a href="./delete_movie.php?email=<?php echo $email  ?>"> <button onclick="return confirm('Are you sure?')"> Delete </button> </a> </td>

           </tr>
           <?php
         }
        ?>
      </table>
    <form action="movie_to_watchlist.php" method="post">
      <input type="text" name="moviename" placeholder="Movie Name">
      <input type="submit" name="add" value="add">

    </form>
  </body>
</html>
