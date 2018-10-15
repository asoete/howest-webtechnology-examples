<?php

// comment
# comment
/*
 block
*/

$variable = 1; /*comment*/ $var2 = 2;
$variable = 1; # comment  $var2 = 2;

/*
$int = 123;
$float = 123.456;
$bool = true || false;
$string1 = "hello world $int \n";
$string2 = 'hello world $int \n';

echo '>>' . $string1 . '<<';
echo '>>' . $string2 . '<<';

$array = array( 1, 2, 3 );
$array = [ 1, 2, 3 ];

print_r( $array );

$assoc_arr = [
   'key1' => 'val1',
   'key2' => 'val2',
   'key3' => 'val3',
];

print_r( $assoc_arr );

# ---------------------------------------------

if( $cond ) {

   // code exec if $cond === true
}
else {

   // exec if $cond === false
}

if( $q != $a ) {

}

if( $a < 10 or ( $a < 15 and $a < 20 ) ) {

}
elseif( $a == 10 ) {

}
elseif( $a == 20 ) {

}
else {

}

# loops

$counter = 1;
while( $counter <= 10 ) {

   // execute while $cond eval -> true

   // $counter = $counter + 5;
   // $counter += 5;
   echo "$counter\n";
   $counter++;
}

for( $i=0; $i < 10; $i++ ) {

   echo "$i\n";
}

*/

$arr = [ 1,2,3,4,5,6 ];
$arr_c = count( $arr );

for( $i=0; $i < $arr_c; $i++ ) {

   echo "Index: $i has value $arr[$i]\n";
}

$arr_assoc = [
   'key1' => 'val1',
   'key2' => 'val2',
   'key3' => 'val3',
];
$arr_assoc_c = count( $arr_assoc );
print_r( $arr_assoc );
var_dump( $arr_assoc_c );

foreach( $arr_assoc as $value ) {

   echo "The value is: $value\n";
}

foreach( $arr_assoc as $key => $value ) {

   echo "The key is: $key\n";
   echo "The value is: $value\n";
   echo "\n";
}

foreach( $arr_assoc as $hello => $world ) {

   echo "The key is: $hello\n";
   echo "The value is: $world\n";
   echo "\n";
}

echo "\n";
?>
