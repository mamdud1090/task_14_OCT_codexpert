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


// $a = '1236545522';

// $b = myWordCount($a);
// echo($b);

// exit();


	$a = 'abcab';

	$a_count = myWordCount($a);

	$b = $a_count/2;

	// echo $b;


	$b_ceil = ceil($b);

	echo $b_ceil;

	$given_string = 'abcabb';

	$given_string_len = myWordCount($given_string);

	// echo $given_string_len;

	$mid_given_string_len = $given_string_len/2;

	// echo $mid_given_string_len;

	// exit;


	$s1= substr($given_string, 3, 2);
	$s2= substr($given_string, -2, 2);

	// echo $s1; 
	// echo $s2;


	if ($s1 == $s2) {
		
		echo'true';
	}

	else{
		echo'false';

	}



?>