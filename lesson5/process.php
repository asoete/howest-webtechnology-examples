<pre>

<?php

if( isset($_GET['submit']) ) {

	echo "Data was sent!";
	
	print_r( $_GET );

	echo "Value of textfield is: $_GET[textfield]";
}
else {

	echo "ERROR: Please send us some data...";
}


?>

</pre>
