<?php

$array = array( 1, 2, 3, 4);
$array = [ 1, 2, 3, 4 ];
$array = [ "one", "two", "three", "four" ];

/* var_dump( $array ); */
print_r( $array );

$num_items = count( $array );
// var_dump($num_items);

$counter = 0;
while( $counter < $num_items ) {

	echo "index/key = $counter\n";
	echo $array[$counter] . "\n";
	$counter++;
}


$assoc_array = [
	1 => "een",
	"one" => "een",
	"two" => "twee",
	"three" => "drie",
	"four" => "vier",
];

print_r($assoc_array);

# for / while
foreach( $assoc_array as $key => $value ) {

	echo "At index/key '$key' sits value '$value'\n";
}

foreach($array as $random_name) {

	echo "$random_name\n";
}

foreach($array as $pos => $random_name) {

	echo "$pos => $random_name\n";
}
?>
