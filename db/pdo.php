<?php
error_reporting(E_ALL);
if (!ini_get('display_errors')) {
    ini_set('display_errors', 1);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM students");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetchAll();
    foreach ($result as $key => $value) {
      echo $value['name'];
      echo "<br />";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>
