<?php

/*
Create a script that prints a line of a asterisks * defined by a command line parameter.
*/

$nr_of_ast = $argv[1];

echo "Print line of * via for:\n";

for( $i=0; $i < $nr_of_ast; $i++ ) {

	echo '*';
}

echo "\n";

# ------------------------------------------------------------------------------

echo "Print line via while:\n";

while( $nr_of_ast > 0 ) {

	echo '*';
	$nr_of_ast--;
}
echo "\n";
