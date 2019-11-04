<pre>
<?php

// print_r( $_GET );

if( isset( $_POST['submit']) ) {

   print_r( $_POST );
   print_r( $_FILES );
   echo "$_POST[some_text]\n";

   $tmp_file_name = $_FILES['some_file']['tmp_name'];

   echo "TMP FILE: $tmp_file_name\n";

   $array_of_lines = file( $tmp_file_name );

   $string_of_lines = file_get_contents( $tmp_file_name );
   $array_of_lines = explode("\n", $string_of_lines );
}
else {

   echo "Please send some data via POST tot this script...";
}

?>
</pre>
