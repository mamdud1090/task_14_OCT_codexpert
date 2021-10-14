<?php

function myWordCount($word_count){

    // $word_count = "madam";

    $init_length = 0;
    while($word_count[$init_length] != ''){
        $init_length++;
    }

    // print $init_length;

    // exit();

	// var_dump($word_count);

	return $init_length;

}


$str = "sdasdasdsdkjsdkdjbskdbvksdbfksjdbfkdbfksdjbf";
$parts = str_split($str, 2);
// print_r($parts);

// exit;


// $a = '1236545522';

// $b = myWordCount($a);
// echo($b);

// exit();


	$a = 'abcab';

	$a_count = myWordCount($a);

	$b = $a_count/2;

	// echo $b;


	$myWord = 'abcdabc';

	$count_my_word = myWordCount($myWord);

	echo $count_my_word;

	exit;


	?>