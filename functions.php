<?php

echo "funkcije";
echo "<br />";
echo "<br />";

function getSum($num1, $num2){
  echo $num1 + $num2;
}

getSum(1, 2);

function getDif($num1, $num2){
  $num3 = $num1 - $num2;
  if($num3 < 0){
    echo "nije moguce ispisati";
  } else {
    echo $num3;
  }
}

echo "<br />";

getDif(1, 2);

echo "<br />";

getDif(3, 2);

echo "<br />";

function getPow($num1, $num2){
  $num3 = $num1 * $num2;
  return $num3;
}

$num4 = getPow(2,4);
echo $num4;

echo "<br />";

 ?>
