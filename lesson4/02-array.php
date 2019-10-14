<?php

// $int = 123;
// 
// $array = array( 1, 2, 3, "string", true );
// $array = [ 1, 2, 3, "string", true ];
// 
// print_r( $array );
// /* var_dump( $array ); */
// 
// echo $array[3] . "\n";
// 
// // iterate
// 
// $nrof_items = count( $array );
// 
// for( $index=0; $index < $nrof_items; $index++ ) {
// 
//    echo "value at position $index is '$array[$index]'\n";
// }
// 
// //
// 
// $assoc_array = [
//    0 => 1,
//    1 => "two",
//    "three" => 3,
// ];
// 
// print_r( $assoc_array );
// 
// $assoc_array["new"] = "new value";
// 
// print_r( $assoc_array );
// 
// $assoc_array[100] = "another value";
// $assoc_array[] = "another value 2";
// 
// print_r( $assoc_array );
// 
// 
// $count = count( $assoc_array );
// 
// echo "items im \$assoc_array == $count \n";
// 
// /* for( $i=0; $i< $count; $i++ ) { */
// 
// /*    echo "$assoc_array[$i]\n"; */
// /* } */
// 
// foreach( $assoc_array as $key => $item ) {
// 
//    echo "at key $key is value: $item\n";
// }
// 
// $twoD = [
//    [1, 2, 3],
//    ["key1" => "value1", "..."],
//    ["..."],
// ];
// 
// print_r( $twoD );
// 
// 
// $arr = [ "one" => 1 ];
// $arr["one"] = 2;
// 
// print_r( $arr );
// 
// */

$a = [
   "one",
   "two",
   "three",
   "four",
   "five",
];

print_r( $a );

unset( $a[0] );

print_r( $a );

$item = array_shift( $a );
echo "\$item = $item\n";
print_r( $a );

$last_item = array_pop( $a );
echo "\$last_item = $last_item\n";
print_r( $a );

//adding to end :

$a[] = "new value at the end";
print_r( $a );
array_push( $a, "another value at the end" );
print_r( $a );

array_unshift( $a, "add this in the beginning");
print_r( $a );

sort( $a );
print_r( $a );

echo count( $a ) . "\n";

echo mycount( $a ) . "\n";
echo mycount( $a ) . "\n";
echo mycount( $a ) . "\n";
echo mycount( $a ) . "\n";
echo mycount( $a ) . "\n";
echo mycount( $a ) . "\n";

function mycount( $array ) {

   $count = 0;
   foreach( $array as $item ) {

      $count++;
   }

   return $count;
}

?>
