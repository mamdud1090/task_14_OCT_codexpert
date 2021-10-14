<?php

$numbers = array(4, 5, 2, 7, 11,58);
// sort($numbers);

$arrlength = count($numbers);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $numbers[$x];
//   echo "<br>";
// }

// echo $arrlength;

// exit();

$x = 0;
$c = 0;

$a = array_sum($numbers);

 // echo $a;


 for($i = 0; $i<=$arrlength-1; $i++){

  $c++;
  $b = array_slice($numbers, $c, 2);
   echo array_sum($b);
 }

 // var_dump($b) ;

 echo $c;

 // echo $x;

 echo array_sum($b);


// $b = array_slice($numbers, $x, 2);
// echo $b;


