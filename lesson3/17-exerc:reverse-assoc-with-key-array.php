<?php

// Print array in reverse order...

$array = array(
    'position 1' => 'hello',
    'position2' => 'world',
    3            => 'three',
    'four'       => 4
);

$keys = [];
foreach( $array as $key => $value ) {

	$keys[] = $key;
}
//print_r( $keys );

$reverse_array = [];
for ($index = count($keys) - 1; $index >= 0 ; $index--) {
    
    $key_in_orig_array = $keys[$index];
    $reverse_array[$key_in_orig_array] = $array[$key_in_orig_array];
}

print_r( $array );
print_r( $reverse_array );








// Note single quotes around string key outside "" but non inside ""
// echo "key: 'position 2', value: " . $array['position2'] ."\n";
// echo "key: 'position 2', value: $array[position2]" . "\n";


// Print array in reverse order but keep key:value associations...

$array = array(
    'position 1' => 'hello',
    'position 2' => 'world',
    3            => 'three',
    'four'       => 4
);
