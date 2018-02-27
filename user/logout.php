<?php
session_start();

$_SESSION['user'] = null;
unset($_SESSION['user']);

echo "Uspesno ste se izlogovali";

?>

<a href="login.php">Vratite se na log in stranicu</a>
