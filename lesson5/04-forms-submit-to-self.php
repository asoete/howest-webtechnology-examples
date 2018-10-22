<pre>
<?php

print_r( $_REQUEST );

if( isset($_POST['submit_btn'] ) ) {

   echo "We have POST data!";
   print_r( $_POST );
}

if( isset($_GET['submit_btn'] ) ) {

   echo "We have GET data!";
   print_r( $_GET );
}

?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>HTML Forms and PHP</title>
</head>
<body>

<form action="#" method="POST">

   <p>
      <label for="username">
         Username
      </label>
      <input type="text" name="username" value="" id="username">
   </p>

   <p>
      <label>
         Password
         <input type="password" name="password" value="">
      </label>
   </p>


   <input type="submit" name="submit_btn" value="Submitted">
</form>

</body>
</html>
