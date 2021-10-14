<?php

$numbers = array(4, 5, 2, 7, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

echo "<br>";echo "<br>";


$last_index = $numbers[$arrlength-1];

$second_last_index = $numbers[$arrlength-2];

echo $last_index;
echo "<br>";
echo $second_last_index;

$sum_last_two_index = $last_index + $second_last_index;

echo "<br>";

echo $sum_last_two_index;


?>