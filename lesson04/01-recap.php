<?php

// echo "hello lesson 4\n";
// 
// $string = "some words and letters and numbers 123\n";
// $int = 123;
// $float = 1.234;
// $bool = true or false;
// 
// if( 1 > 2 ) {
// 
// 	// execute this when if statement === true
// }
// // elseif {}
// else {
// 
// 	// execute this block when if === false
// }
// 
// 
// while( "as long as this === true" ) {
// 
// 	// execute as long as cond === true
// }
// 
// 
// $counter = 0;
// while( $counter < 10 ) {
// 
// 	// execute as long as $counter < 10
// 	$counter++;
// }
// 
// 
// for( $counter = 0; $counter < 10; $counter++ ) {
// 
// 	// execute as long as $counter < 10
// }

$array = array( 1, 2, 3 );
$array = [ 1, 2, 3 ];

print_r( $array );

echo $array[1] . "\n";

// array_push(), array_pop()
// array_shift(), array_unshift()

echo count( $array ) . "\n";

$array[5] = 123;
$array[] = 345;
print_r($array);

$array_2 = [
	"key" => "value",
	"A" => 2,
];

$array_2["A"]++;
print_r($array_2);
?>
