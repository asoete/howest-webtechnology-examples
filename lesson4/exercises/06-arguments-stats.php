<?php

/* print_r( $argv ); */

$scriptname = array_shift( $argv );

/* print_r( $argv ); */

$smallest_nr = $argv[1];
$largest_nr = $argv[1];
$sum = 0;
$nrof_elements = 0;
$occurences = [];

foreach( $argv as $index => $number ) {

   echo "at pos/index $index we have number = $number\n";

   // test if number is less then $smallest_nr...

   // if( !isset( $smallest_nr ) ) {

   //    $smallest_nr = $number;
   // }

   if( $number < $smallest_nr ) {

      $smallest_nr = $number;
   }

   // test if number is more then largest_nr...
   if( $number > $largest_nr ) {

      $largest_nr = $number;
   }

   $nrof_elements++;

   /* $sum = $sum + $number; */
   $sum += $number;

   if( !isset($occurences[$number]) ) {

      $occurences[$number] = 1;
   }
   else {

      $occurences[$number]++;
   }
}

echo "Smallest number: $smallest_nr\n";
echo "Largest number: $largest_nr\n";
echo "AVG: " . $sum / $nrof_elements . "\n";
echo "Items in the list: $nrof_elements\n";
print_r( $occurences );


# // first encounter
# $arr[1] = 1;
# 
# // later encounters
# $arr[1] = $arr[1] + 1;
# $arr[1]++;


?>
