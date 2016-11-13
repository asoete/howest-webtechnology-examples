<?php
function factorial( $nr ) {

	echo "calculating $nr! ...\n";

   if( $nr <= 1 ) {
      return 1;
   }
   return $nr * factorial( $nr -1 );
}
echo factorial( $argv[1] ) . "\n";
