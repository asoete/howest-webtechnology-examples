$lines  = file ( ... );

foreach( $lines as $line ) {
 
	if( preg_match('/^>/', $line) ) {

		echo "matched starting '>'";
	}
}

<form action="#" method="post" enctype="multi-form/data">
	
	<input type="radio" name="paste-type" value="file" checked>
	<input type="file" name"file">
	
	<br>
	
	<input type="radio" name="paste-type" value="paste">
	<textarea name="paste"></textarea>
	
</form>

print( $val );
echo $val;
