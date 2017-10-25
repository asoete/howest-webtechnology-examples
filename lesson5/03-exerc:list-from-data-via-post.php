<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Simple Form</title>

   <style type="text/css">
      .form-item {

         padding: 0.5em 1em;
      }
      
      li b {
      
      	/*background: red;*/
      	display: inline-block;
      	width: 100px;
      	text-align: right;
      }

   </style>
</head>
<body>

<?php

/*
if( true) {
	#...
}
else{
	#...
}

if(true):

	#...
else:

	#...
endif;
*/


if ( isset( $_POST['submit']) ):

	echo "<h2>Data received:</h2>";
	echo '<ul>';
	foreach( $_POST as $name => $value ) {
	
		echo "<li><b>$name:</b> <code>$value</code></li>";
	}
	echo '</ul>';
	
	echo '<a href="02-exerc:list-from-data.php">Refill form</a>';
	echo "<a href=\"02-exerc:list-from-data.php\">Refill form</a>";

else:

?>

   <h2>Fill in the form to subscribe to the service</h2>

   <form action="#" method="post">
   
      <div class="form-item">
         <label>
            First name:
            <input type="text" value="" name="fname">
         </label>
      </div>

      <div class="form-item">
         <label>
            Last name:
            <input type="text" value="" name="lname">
         </label>
      </div>

      <div class="form-item">
         <label>
            Male:
            <input type="radio" value="male" name="gender">
         </label>
         <label>
            Female:
            <input type="radio" value="female" name="gender">
         </label>
      </div>

      <div class="form-item">
         <label>
            E-mail address:
            <input type="email" name="email">
         </label>
      </div>

      <div class="form-item">
         <label>
            Enter/Choose a password:
            <input type="password" name="password">
         </label>
      </div>

      <div class="form-item">
         <label>
            I want to receive newsletter updates
            <input type="checkbox" name="updates">
         </label>
      </div>

      <div class="form-item">
         <input type="submit" value="Submit" name="submit">
      </div>
   </form>

<?php
endif;
?>

</body>
</html>

