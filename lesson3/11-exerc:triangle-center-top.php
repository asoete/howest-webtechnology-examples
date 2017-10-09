<?php
/*
*********
 *******
  *****
   ***
    *
*/

$base = $argv[1];

for ($rows = $base; $rows > 0; $rows-=2) {
    
    $spaces = ($base - $rows) / 2;
    
    for ($spacecount = 0; $spacecount < $spaces; $spacecount++) {
        echo ' ';
    }
    
    for ($starcount = 0; $starcount < $rows; $starcount++) {
        echo "*";
    }
    
    echo "\n";
}






















