<?php
/*
Create a script that prints a center + bottom balanced triangle of asterisks with base defined by parameter.
     
    **
   ****
  ******
 ********
*/

$base = $argv[1];

for ($rows = 1; $rows < $base; $rows+=2) {
    
    $spaces = ($base - $rows) / 2;
    
    for ($spacecount = 0; $spacecount < $spaces; $spacecount++) {

        echo ' ';
    }
    
    for ($starcount = 1; $starcount <= $rows; $starcount++) {
        echo "*";
    }
    
    echo "\n";
}























