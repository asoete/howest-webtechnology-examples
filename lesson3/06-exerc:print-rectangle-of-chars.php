<?php
/*
Create a script which
    - prints a square of a asterisks * if one parameter is defined
    - Prints a block with width and height if both parameters are
      defined.
*/

echo "Print square based on the first param.\n";
$size = $argv[1];

for ($row_count = 0; $row_count < $size ; $row_count++) {
    
    for ($col_count = 0; $col_count < $size ; $col_count++) {
        
        echo '*';
    }
    echo "\n";
}

echo "Print rectangle based on two params.\n";

$height = $argv[1];
// $width = $argv[1];

if( isset($argv[2]) ) {

	$width = $argv[2];
}
else {

	$width = $argv[1];
}



for ($row_count = 0; $row_count < $height ; $row_count++) {
    
    for ($col_count = 0; $col_count < $width ; $col_count++) {
        
        echo '*';
    }
    echo "\n";
}













