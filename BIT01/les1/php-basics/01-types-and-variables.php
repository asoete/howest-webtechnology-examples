<?php

// int: 1 2 3
// Floats: 3.1415
// Strings: 'Hello world'
// booleans: true | false

// commentaar 1

# Commentaar versie 2

/* Commentaar versie 3
   multiline comments
*/

$int = 123;
$float = 1.2345;
$string = 'some text';
$true = true;
$false = false;

echo $int, "\n", $float, "\n", $string, "\n";

echo "int = $int , float = $float, string = $string\n";
echo 'int = $int , float = $float, string = $string\n';
echo "\n";

// Special characters in double quotes
// \t -> TAB
// \n -> newline
// \$ -> literal $
// \" -> litereal "

echo "\t Hello world \$int: $int , \$string: \"$string\" \n";
// Error: echo "\t Hello world \$int: $int , \$string: "$string" \n";

echo "wat tekst \"Tekst in aanhalingstekens\" einde string\n";

# ------------------------------------------

/*

$var1 = 'hello';
$var2 = 'world';

$sentence = '...';

// echo $sentence should ouput -> hello world!

$sentence = "$var1 $var2!\n";
echo $sentence;

$sentence = $var1 . ' ' . $var2 . "!\n";
echo $sentence;

// echo $sentence should ouput -> hello 'world'!

$sentence = "$var1 '$var2'!\n";
echo $sentence;

// echo $sentence should ouput -> hello "world"!

$sentence = "$var1 \"$var2\"!\n";
echo $sentence;

$sentence = $var1 . ' "' . $var2 . '"' . "!\n";
echo $sentence;

// Basis rekenen

echo 1 + 1 . "\n";
echo 1 - 1 . "\n";
echo 2 * 3 . "\n";
echo 2 / 3 . "\n";
echo 5 % 3 . "\n";
echo 5 ** 2 . "\n";

// Test of een getal even is

echo 6 % 2 . "\n";
echo 5 % 2 . "\n";
echo 5.5 % 2 . "\n";

*/

# -----------------------------------------------

// Arrays

// Lege array
$array = array();

// init
$array = array( 1, 2, 3);

//print array

// Error: echo $array;

print_r( $array );

// Note zero based. index = Nde element - 1

// tweede init

// Lege array;
$array = [];

$array = ['one','two', 3];

print_r($array);

// get element
// Via the key

echo $array[0] . "\n";
echo $array[1] . "\n";
echo $array[2] . "\n";

// custom keys

$assoc_array = [
	'key1' => 1,
	3 => 'three',
	'extra value'
];

print_r( $assoc_array);

// modify array value

$assoc_array['key1'] = 'one';
$assoc_array[3] = 'updated';

print_r( $assoc_array );

// Extract first el in array

$first_el = array_shift($assoc_array);
echo $first_el . "\n";

// Extract last el	
$last_el = array_pop($assoc_array);
echo $last_el . "\n";

// unshift - push

// Add item in front
array_unshift( $assoc_array, 'add this to head' );
print_r($assoc_array);

// Add item in back
array_push( $assoc_array, 'add this to tail' );
print_r($assoc_array);

// count values in an array

echo count($assoc_array) . "\n";

print_r( array_keys( $assoc_array ) );

# ---------------------------------------------

$array = [
	'name' => 'arne',
	'age' => 28
];

// print: Ik ben <name> en <age> jaar oud...

echo " Ik ben $array[name] en $array[age] jaar oud.\n";

echo " Ik ben " . $array['name'] . " en " . $array['age'] . " jaar oud.\n";










?>
