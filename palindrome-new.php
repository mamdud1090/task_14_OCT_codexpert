<?php

function myWordCount($word_count){

    $word_count = "madam";

    $init_length = 0;
    while($word_count[$init_length] != ''){
        $init_length++;
    }

    print $init_length;

    exit();

	// var_dump($word_count);

	return ;

}


// $a = '1236545522';

// $b = myWordCount($a);
// var_dump($a);

// exit();




function myStrrev($string){

	// $string = 'dolon';

	$myWord = 0;
    $reverse_str = "";

    while($string[$myWord]) {
        $myWord++;
    }
    for ($y = $myWord - 1; $y >= 0; $y--) {
        $reverse_str .= $string[$y];
    }

    // var_dump($reverse_str);
    return $reverse_str;
    // exit();

}


// $z = 'mazhar';

// $y = myStrrev($z);

// var_dump($y);

// // exit();



// exit();


// $z = 'mazhar';

// $y = myStrrev($z);


function dolonPalindrome($input){

// $input = 'dolon';

$output = myStrrev($input);

if ($input==$output) {
	
	echo "It's a palindrome Number/Word";
}

else{
	echo "Not a palindrome number...!!";
}

	return $output;

}


$x = 'eye';

$z = dolonPalindrome($x);

?>



	






?>