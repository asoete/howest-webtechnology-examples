<?php

$hobbies = [ 'music', 'sport', 'food' ];

$dishes = [ 'pizza', 'pitta', 'fries'];

// hobbies...

echo "<ul>";
foreach( $hobbies as $hobby ) {

	echo "<li>$hobby</li>";
}
echo "</ul>";

// food...

echo "<ol>";
foreach( $dishes as $dish ) {

	echo "<li>$dish</li>";
}
echo "</ol>";
