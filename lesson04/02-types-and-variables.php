<?php

// Variables
// azAZ_09 (BUT not starting with a number)
$var = 564;
echo $var."\n";
echo $var."\n";
echo $var."\n";

// Scalar types
$int = 123;
$float = 4.56;
$string = "hello world";
$string = 'hello world';
$boolean = true or false;

// Strings

$string1 = "part 1";
$string2 = "part 2";

$newstr = $string1 . " <<>> " . $string2;
$newstr = '$string1 <<>> $string2\n';
echo "$newstr\n";
$newstr = "$string1 <<>> $string2\n";
echo "$newstr\n";

echo "insert a newline\n";
echo "\tinsert a tab\n";
echo '\tinsert a tab\n' . "\n";

echo "$string1 = $string1\n";
echo '$string1' . " = $string1\n";
echo "\$string1 = $string1\n";

echo '"$string1"' . " = $string1\n";
echo "\"\$string1\" = $string1\n";

print("hello from print\n");

var_dump($string1);
var_dump($int);
var_dump($float);
var_dump($boolean);


// -----------------------------------

$result = 1 + 1;
// echo 1 + 1 . "\n";
echo $result . "\n";
echo "$result\n";

$result = 1 + 1;
$result = 1 - 1;
$result = 1 * 1;
$result = 1 / 1;
$result = 1 ** 10;
$result = 12 % 3;

?>
