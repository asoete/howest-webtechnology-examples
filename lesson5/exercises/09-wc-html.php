<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Word Count</title>
   <style type="text/css">
      textarea {

	 width: 100%;
	 height: 150px;
      }
   </style>
</head>
<body>

<h3>Word Count</h3>

<form action="#" method="post">

   <label>
   <input 
      type="checkbox"
      name="show_line_count"
      <?php if( isset($_POST['show_line_count'])){ echo "checked"; } ?>
   >
      Show line count
   </label> <br>

   <label>
      <input type="checkbox" name="show_word_count" checked>
      Show word count
   </label> <br>

   <label>
      <input type="checkbox" name="show_char_count">
      Show char count
   </label> <br>

   <textarea name="text"></textarea>
   <input type="submit" class="submit" value="submit" name="submit">
</form>

<?php

if( isset($_POST['submit']) ) {

   # print_r( $_POST );

   $line_count = 0;
   $word_count = 0;
   $char_count = 0;

   $lines = explode( "\n", $_POST['text'] );
   $line_count = count( $lines );
   foreach( $lines as $line ) {

      // exploded <-> trim 

      $words = explode( " ", $line );
      $word_count += count( $words);
      $char_count += strlen( $line ) + 1; // +1 for removed \n
   }

   #print_r( $_POST );

   echo "<table>";

      if( isset( $_POST['show_line_count']) ) {
	 echo "<tr>";
	    echo "<th># Lines</th>";
	    echo "<td>$line_count</td>";
	 echo "</tr>";
      }

      if( isset($_POST['show_word_count']) ) {
	 echo "<tr>";
	    echo "<th># Words</th>";
	    echo "<td>$word_count</td>";
	 echo "</tr>";
      }

      if( isset($_POST['show_char_count']) ) {
	 echo "<tr>";
	    echo "<th># Characters</th>";
	    echo "<td>$char_count</td>";
	 echo "</tr>";
      }
   echo "</table>";

}

?>

</body>
</html>
