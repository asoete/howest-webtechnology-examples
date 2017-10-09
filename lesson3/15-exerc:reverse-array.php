<?php

// Print array in reverse order...

$array = ['one', 'two', 'three', 'four', 'five', 'six'];
print_r($array);
$count = count( $array );

for ($index = $count - 1; $index >= 0; $index--) {
    
    //echo "\$index: $index\n";
    echo $index .' -> '. $array[$index] . "\n";
    echo "$index -> $array[$index]\n";
}
