<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Form Inputs</title>
   <style type="text/css">
   strong {

      display: inline-block;
      width: 75px;
      text-align: right;
   }
   </style>
</head>
<body>


<?php if( isset($_POST['submit']) ) {

   // Show the data...
   # echo "<pre>";
   # print_r( $_POST);

   echo "<ul>";
   foreach( $_POST as $form_name => $value ) {

      echo "<li><strong>$form_name</strong>: $value</li>";
   }
   echo "</ul>";

   echo '<a href="05-form-inputs.php">Refill Form</a>',
      '<br>';

   echo "<a href=\"05-form-inputs.php\">Refill Form</a>";
}
else {

   // Show the form...
?>
   <h1>Fill in the form to subscribe to the service</h1>

   <form action="#" method="post">
      <p>
         <label>
            First Name:
            <input type="text" class="text" value="" name="fname">
         </label>
      </p>
      <p>
         <label>
            Last Name:
            <input type="text" class="text" value="" name="lname">
         </label>
      </p>

      <p>
         <label>
            Male
            <input type="radio" class="radio" value="male" name="gender">
         </label>
         <label>
            Female
            <input type="radio" class="radio" value="female" name="gender">
         </label>
      </p>

      <p>
         <label>
            Email
            <input type="email" class="text" value="" name="email">
         </label>
      </p>

      <p>
         <label>
            Password
            <input type="password" class="text" value="" name="password">
         </label>
      </p>

      <p>
         <label>I want to receive newsletter updates
         <input type="checkbox" class="checkbox" value="i want the letter" name="newsletter">
         </label>
      </p>

      <p>
      <input type="submit" class="submit" value="submit" name="submit">
      </p>

   </form>
<?php
}
?>

</body>
</html>
