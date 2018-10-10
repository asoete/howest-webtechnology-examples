<?php

# $array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];

# var_dump( $array );
print_r( $array );

# echo $array;
echo $array[1] . "\n";
// print("hello world\n");

$assoc_array = [
   'one' => 1,
   'two' => 2,
   'three' => 3,
   4 => 'four'
];

print_r( $assoc_array );

echo $assoc_array['two'] . "\n";

### Array manipulations

# Get #items
$count = count( $array );
echo "\$array holds $count values...\n";

## Get the last item of $array
echo $array[$count -1] ."\n";

echo array_pop( $assoc_array ) . "\n";
print_r( $assoc_array );

## Get first element in array

echo $array[0] . "\n";

echo array_shift( $assoc_array ) . "\n";
echo array_shift( $array ) . "\n";

## Add item to end array:

$array[] = 'five';
$array[8] = 'eight';
$array['nine'] = 9;

array_push($array, 'ten', 11, 12);

print_r( $array );


## Add items in front

array_unshift( $array, 'in front');
print_r( $array );

## Multi dimensional arrays

$array = [
   1,
   2,
   3,
   'sub_array' => [
      'one', 'two', 'three'
   ]
];
print_r( $array );


$d2 = [
   ['a', 'b', 'c'],
   ['x', 'y', 'z'],
   ['1', '2', '3'],
];

$d2[0][1] = 'hit';

print_r( $d2 );

print_r( $argv );
