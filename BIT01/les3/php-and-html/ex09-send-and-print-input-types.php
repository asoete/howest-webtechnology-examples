<form action="#" method="post">

   <label>
      First name:
      <input type="text" name="first_name" value="" required >
   </label>

   <hr>

   <label>
      Last name:
      <input type="text" name="last_name" value="" >
   </label>

   <hr>

   <label>
      Male:
      <input type="radio" name="gender" value="male" >
   </label>

   <label>
      Female:
      <input type="radio" name="gender" value="female" >
   </label>

   <hr>

   <label>
      Age
      <input type="number" name="age" value="" >
   </label>

   <hr>

   <label>
      Email address:
      <input type="email" name="email" value="" >
   </label>

   <hr>

   <label>
      Password
      <input type="password" name="password" value="" >
   </label>

   <hr>

   <label>
      <input type="checkbox" name="wants_updates" value="" >
      I want to receive updates...
   </label>
   
   <input type="submit" name="submit">
</form>


<?php

if( isset( $_POST['submit']) ) {

	unset( $_POST['submit'] ); // delete item `submit` from list/data
	
	foreach( $_POST as $name => $value ) {
	
		echo "<div>";
			echo "field with name: `<em>$name</em>` has value: `<em>$value</em>`.";
		echo "</div>";
	}
}







