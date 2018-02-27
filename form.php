
<?php

if(isset ($_POST) && !empty($_POST)) {
    $user = $_POST['user'];
    echo  $_POST['user'];
    echo "<br />";
    $email = $_POST['email'];
    echo $_POST['email'];
    echo "<br />";
    $message = $_POST['message'];
    echo $_POST['message'];
    echo "<br />";

    $emailbody = "ovo su podaci: $user, $email, $message";
    mail("nebojsa.konstantin@gmail.com", "poruka sa sajta", $emailbody);

}


 ?>


<!DOCTYPE html>


<html>
  <head>
    <meta charset="utf-8">
    <title>forma</title>
  </head>
  <body>
    <div class="">
      <h1>Kontakt Forma</h1>
      <form class="" action="" method="post">
        <p>
          <label for="">Ime i Prezime</label>
          <input type="text" name="user" value="">
        </p>
        <p>
          <label for="">Email</label>
          <input type="emali" name="email" value="">
        </p>
        <p>
          <label for="">Poruka</label>
          <textarea name="message" rows="2" cols="40"></textarea>
        </p>
        <p>
          <input type="submit" name="submit" value="Send">
        </p>

      </form>
    </div>
  </body>
</html>
