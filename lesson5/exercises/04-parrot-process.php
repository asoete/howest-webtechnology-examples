<?php

if( !isset( $_GET['sentence'])) {

   echo "Parrot has nothing to say";
}
else {

   echo "Parrot says: <q>$_GET[sentence]</q>";
}

?>
