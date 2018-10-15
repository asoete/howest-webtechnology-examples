<?php

$nt = 'X';
$atgc = true;

if( $nt == 'A' ) {}
elseif( $nt == 'T' ) {}
elseif( $nt == 'C' ) {}
elseif( $nt == 'G' ) {}
else {

   $atgc = false;
}

if( $atgc ) {

   echo "$nt was ATG or C\n";
}
else {
   echo "$nt was NOT ATG or C\n";
}
