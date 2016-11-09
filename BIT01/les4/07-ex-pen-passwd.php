
$passwd = '';
.
while( !preg_match( '/[0-9]+/', $passwd ) ) {

	$passwd = genPasswd();
}
