<?php
session_start();
if (!isset($_SESSION['email'])) {
header('Location: ./signin.php');
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./movied.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Movie</title>
  </head>

  <body style= "background-image : url(./gg.jpg) ; background-repeat: no-repeat; background-attachment: fixed;background-position: center top; background-size: 100% 100%;">


    <h1>Rotten Bananaas</h1>
    <h2>Welcome.
    Make your watchlist,See trailer and explore now.</h2>
    <div class="topnav">
      <a href="./Profile.php">Profile</a>
<a href="./signin.php">Login</a>
  <a href="#wishlist">Wishlist</a>
  <a href="./watchlist.php">Watchlist</a>
  <a href="./logout.php"> Logout</a>
</div>


    <div class="main">
    <form class="" action="./movie_search.php" method="post">
    <input class="main" type="text" name="moviename" placeholder="Type to search">
    <input  type="submit" name="Search" value="Search">
    </form>
    </div>

    <table class="center">
      <thead>
        <tr>
          <th>Movies Recomendation</th>
        </tr>
      </thead>
<tbody>
  <tr>
    <td><a href="./viewMovie.php">Spider Man Homecoming</a></td>
    <td><a href="#">Super Man</a> </td>
    <td><a href="#">Bat Man</a></td>
  </tr>
</tbody>
    </table>

  </body>
</html>
