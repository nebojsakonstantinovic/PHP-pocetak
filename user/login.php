<?php
session_start();
if(isset ($_POST) && !empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

  // provera da li je korisnik ulogovan

  if($username == 'admin' && $password == 'admin' ){
    //Ovde u sesiju smestamo ulogovanog korisnika
    $_SESSION['user'] = array('name' => 'Nebojsa Konstantinovic', 'email' => 'konstantingfdg@gmail.com');
    echo "Uspesna indetifikacija korisnika";
    echo "<br /><a href = 'myprofile.php' >idi na stanicu moj profil</a>";

    //Redirekcija na stranicu
    //Header('Location: myprofile.php');

  } else {
    echo "Korisnicki podaci nisu ispravni";
  }
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <h1>Prijava</h1>
      <form class="" action="login.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" value="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" value="">
        <br>
        <input type="submit" name="" value="login">
      </form>
    </div>
  </body>
</html>
