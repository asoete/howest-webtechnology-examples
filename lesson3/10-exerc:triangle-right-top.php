<?php
/*

     ****
      ***
       **
        *
*/

$base = $argv[1];

for ($row = $base; $row > 0; $row--) {

    $spaces = $base - $row;
    
    for ($spacecount = 0; $spacecount < $spaces; $spacecount++) {
        echo ' ';
    }
    
    for ($starcount = 0; $starcount < $row; $starcount++) {
        echo "*";
    }
    echo "\n";
}
