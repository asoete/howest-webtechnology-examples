<?php
/*
- Create a script which prints a line of a asterisks (*) defined by
	a command line parameter.
- Extend script to accept print character from the command line 
	`-> script.php <#chars> <char>
	`-> script.php 9 #
*/

// print_r($argv);

$nr_chars = $argv[1];
$char = '*';

// Overwrite default symbol if argument 2 is defined
if( isset($argv[2]) ) {

	$char = $argv[2];
}

for ($i = 0; $i < $nr_chars; $i++) {
    
    echo "$char";
}

echo "\n";
