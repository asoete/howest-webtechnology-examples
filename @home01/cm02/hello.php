hello world

Start PHP code

<?php

// This is PHP code
# Line comment

/* block comment
   spanning multiple lines
 */

echo "hello from PHP\n";
print( "hello from PHP\n" );

# int
$int = 123;
# float
$float = 123.456;
# string
$stringA = "hello world \t \" \$int \" $int \n";
$stringB = 'hello world \t \$int $int \n';

echo $stringA . "\n";
echo $stringB . "\n";

# bool
$bool = true or false;

echo 1 + 3;
echo 1 - 3;
echo 1 * 3;
echo 1 / 3;
echo 1 ** 3;
echo 12 % 3;

// if( $cond ) {
// 	// execute if $cond is true
// }

echo "\n\n";

$value = 1;

if( $value > 2 ) {
	echo "$value gt 2\n";
}
elseif($value == 2) {
	echo "$value eq 2!\n";
}
else {
	echo "$value not gt 2\n";
}

// == > >= < <=

$counter = 0;
while( $counter < 10 ) {

	echo "[$counter] executing the while loop\n";

	// $counter = $counter + 1;
	// $counter += 1;
	$counter++;
}

$counter = 10;
while( $counter > 0 ) {

	echo "$counter\n";
	$counter--;
}

for($counter=0; $counter < 10; $counter++ ) {

	echo "for loop: $counter\n";
}

for($counter=10; $counter > 0; $counter-- ) {

	echo "for loop: $counter\n";
}


$array = array( 1, 2, 3, 4, 5 );
$array = [ 1, 2, 3, 4, 5 ];

// var_dump( $array );
print_r( $array );

$array[] = 6;
$array[6] = 7;

print_r( $array );

$assoc_array = [
	"one" => "een",
	"two" => "twee",
	"three" => "drie",
];


$assoc_array["four"] = "vier";

print_r( $assoc_array );

echo  "Four in dutch == " . $assoc_array["four"] . "\n";
echo  "Four in dutch == $assoc_array[four] \n";

print_r( $assoc_array );

echo array_shift( $assoc_array ) . "\n";
echo array_unshift( $assoc_array, "first" ) . "\n";

echo array_pop( $assoc_array ) . "\n";
$assoc_array[100]  = "value";
$assoc_array[3]  = "value";

echo array_push( $assoc_array, "last" ) . "\n";

print_r( $assoc_array );


$array_count = count( $array );

print_r($array);

for( $index=0; $index < $array_count; $index++ ) {

	echo "\$array at post $index == $array[$index] \n";
}

foreach( $array as $index => $value ) {

	echo "the value at pos $index == $value\n";
}

foreach( $assoc_array as $index => $value ) {

	echo "the value at pos $index == $value\n";
}

$array[7] = 3;
$array[8] = 3;

foreach( $array as $index => $value ) {

	echo "cur val = $value\n" ;
	if( $value > 5 ) {

		break;
	}

	echo "the value at pos $index == $value\n";
}


$master_array = [
	"assoc" =>$assoc_array,
	"list" => [
		$array,
		["array"]
	]
];

print_r($master_array);


?>

End of PHP code
