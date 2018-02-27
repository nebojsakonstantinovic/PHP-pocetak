<?php

$firstname = "Nebojsa";
$lastname = "Konstantinovic";
$number = 1;
$strnumber = 1;


//Write name and last name
/*


*/
echo $firstname;
echo $lastname;
echo $number;

echo $firstname . " " . $lastname;

if ($number === $strnumber) {
  echo "jeste jednako";
} else {
  echo "nije jednoako";
}

if ($number == 1) {
  echo "vrednost je 1";
} else if ($number == 2) {
  echo "vrednost je 2";
} else {
  echo "nije odradjena vrednost";
}

$arr = array(1, 2, 3, 'pera');
$arr2 = array( 1 => "Mile", 2 => "Pera", "index" => "Zika");

echo "<br />";
for ($i = 0; $i < 5; $i++){
  echo $i;
  echo "<br />";
}

echo "<br />";
echo count($arr);

echo "<br />";

for ($i = 0; $i < count($arr2); $i++){
  echo $arr2[$i];
  echo "<br />";
}

echo "<br />";

foreach ($arr2 as $key => $value){
  echo $key . " " . $value;
  echo "<br />";
}

 ?>
