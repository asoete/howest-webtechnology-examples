<?php
/*
Create a script that prints a right + bottom balanced triangle of
asterisks with base defined by parameter.

        *
       **
      ***
     ****
*/


$base = $argv[1];

for ($rows = 1; $rows <= $base; $rows++) {
    
    $spaces = $base - $rows;
    
    for ($spacecount = 0; $spacecount < $spaces ; $spacecount++) {
      
      echo ' ';  
    }
    
    for( $starcount=1; $starcount <= $rows; $starcount++) {
    
    	echo "*";
    }
    
    echo "\n";
}











