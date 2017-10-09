<?php
/*
Create a script that prints a left + bottom balanced triangle of asterisks with base defined by parameter.
	*
	**
	***
*/

$base = $argv[1];

for ($rows = 1; $rows <= $base; $rows++) {
    
    for( $starcount=1; $starcount <= $rows; $starcount++) {
    
    	echo "*";
    }
    echo "\n";
}
