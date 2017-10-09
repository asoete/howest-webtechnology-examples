<?php
/*
Create a script that:

    receives a number from the command line
    counts from zero to this number
    counts back from this number to zero
    counts from zero to the number in steps of three
*/

$number = $argv[1];

// echo $number;

echo "Count from zero to $number\n";
for ($i = 0; $i < $number; $i++) {
    
    echo $i . "\n";
}

echo "Count from number down to zero\n";
for ($i = $number; $i >= 0 ; $i--) {

    echo $i . "\n";
}

echo "Count from zero to $number in step of three\n";
for ($i = 0; $i < $number; $i+=3) {
    
    echo $i . "\n";
}










