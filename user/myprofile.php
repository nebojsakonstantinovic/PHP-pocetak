<?php
  session_start();

  if(isset ($_SESSION['user']) && !empty($_SESSION['user']) ){
    $user = $_SESSION['user'];
  } else {
    echo "Ovoj stranici mogu da pristupe samo ulgovani korisnici";
    echo "<br /><a href = 'login.php'>Prijavi se</a>";

    //Redirekcija na stanicu login.php
    Header('Location: login.php');

    exit();
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>moj profil</title>
  </head>
  <body>
    <h1>Moj profil</h1>
    <p>Korisnik: <?php echo $user['name']; ?> </p>
    <p>email: <?php echo $user['email']; ?> </p>
    <p><a href="logout.php">izloguj se</a></p>
  </body>
</html>
