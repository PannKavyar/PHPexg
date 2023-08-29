<?php
$name='Pann Pann';
//$string_one='learning to display "Hello $name" to the screen.';
// $string_one="learning to display \"Hello $name\" to the screen.\n";
// $string_one='Learning to display '
//      . ' "Hello '
//     .$name 
//     . '!" to the screen.' 
//     . "\n";
// echo $string_one;
$string_one="";

// $string_one='Learning to display ';
// $string_one .= ' "Hello ';
// $string_one .=$name ;
// $string_one .= '!" to the screen.' ;
// $string_one=$string_one . "\n";
//prepend to the string
// $string_one ='I am ' . $string_one;
// echo $string_one;

$isReady=true;
// var_dump($isReady);
$isReady=false;
// var_dump($isReady);

// var_dump(1 + '10');
$a=14;
$b='14';
// var_dump($a == $b);
// var_dump($a === $b);
// var_dump($string_one == 'Learning to display  "Hello Pann Pann!" to the screen.');
if($string_one == 'Learning to display  "Hello Pann Pann!" to the screen.'){
    echo 'the values match';
}
elseif($string_one == ""){
    echo '$string_one is empty';
}else{
    echo 'the values do not match';
}
?>