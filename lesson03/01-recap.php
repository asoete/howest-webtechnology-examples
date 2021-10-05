Before
<?php

print_r($argv);

$argument_1 = $argv[1];
$argument_2 = $argv[2];

$count_to = $argv[1];

// use $count_to ...

exit;

echo "Hello from PHP land\n";

?>
After

<?php

echo "Hello again\n";

$variable_name = "Hello World";

echo $variable_name . "\n";
echo "$variable_name\n";
echo '$variable_name\n';

$string = "Strings";
$int = 123;
$float = 1.23;
$bool = true or false;

#if( $condition ) {
#
#	echo "Execute this block if condition == true\n";
#}
#elseif( $condition_2 ) {
#
#	echo "Execute this block if condition_2 == true\n";
#}
#else {
#
#	echo "If all conditions == false, fall back to this\n";
#}
#
#while( $condition ) {
#
#	echo "execute as long $condition == true";
#}

$counter = 0;
while( $counter < 10 ) {

	echo "execute!\n";
	$counter++;
}

?>
