
<?php
if( !isset( $_GET['submit'] ) ):
?>

<form action="#" method="get">
	
	<input type="text" name="my-input">
	
	<input type="submit" name="submit" value="send">

</form>

<?php else: ?>

<pre>
<?php

print_r( $_GET );

?>
</pre>

<?php endif; ?>
