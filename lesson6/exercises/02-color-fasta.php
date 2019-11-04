<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Color Fasta File</title>
   <style type="text/css">
   .block {

      padding: 1em 0;
   }
   textarea {

      width: 250px;
      height: 50px;
   }
   .A { color: red ;}
   .T { color: blue ;}
   .C { color: green ;}
   .G { color: orange ;}

   .plotwrap {

      border-left: solid grey 1px;
      border-bottom: solid grey 1px;
   }
   .barwrap {
      border: solid grey 1px;
      width: 300px;
      margin: 1em;
   }
   .barfill {

      background: lightblue;
      text-align: right;
      border-right: solid grey 1px;
   }

   </style>
   
</head>
<body>

   <form action="#" method="post" enctype="multipart/form-data">
      <div class="block">
         <label>
            <input class="radio" type="radio" name="upload_method" value="paste">
            Paste a multifasta sequence
            </label>
            <div>
               <textarea name="pasted_seq"></textarea>
            </div>
            
      </div>
      <div class="block">
         <label>
            <input class="radio" type="radio" name="upload_method" value="file">
            Upload a multifasta file
            </label>
            <div>
               <input type="file" name="uploaded_seq" value="">
            </div>
            
      </div>
      <div class="block">
         <input class="submit" type="submit" value="Upload Fasta" name="submit">
      </div>
      
   </form>

<?php

// echo "<pre>";
//    echo "_POST: ";
//    print_r( $_POST );
//    echo "_FILES: ";
//    print_r( $_FILES );
// echo "</pre>";

if( isset($_POST['submit']) ) {

   $lines = [];
   if( isset( $_POST['upload_method'] ) and $_POST['upload_method'] === 'paste' ) {

      $lines = explode("\n", $_POST['pasted_seq']);
   }
   elseif( isset( $_POST['upload_method'] ) and $_POST['upload_method'] === 'file' ) {

      $lines = file($_FILES['uploaded_seq']['tmp_name']);
   }
   else {

      die("Invalid upload method");
   }

   $output = '';
   $headers = [];
   $header_count = 0;
   $header_key = '';
   $prct = [];
   foreach( $lines as $line ) {

      $line = trim( $line );

      if( preg_match('/^>/', $line) ) {

         $nts_printed = 0;
         $header_count++;
         $header_key = $line;
         $prct[ $header_key ] = [];

         $header_id = "seq$header_count";
         $headers[$header_id] = $line;

         $output .= "<h4 id=\"$header_id\">";
            $output .= "$line\n";
         $output .= "</h4>";

         continue;
      }

      // PRINT X NT's PER LINE
      $nt_arr = str_split( $line );

      foreach( $nt_arr as $nt ) {

         // echo "$nt";

         $nt_class = strToUpper($nt);

         $output .= "<span class=\"$nt_class\">$nt</span>";

         if( !isset( $prct[ $header_key ][ $nt ] ) ) {

            $prct[ $header_key ][ $nt ] = 0;
         }
         $prct[ $header_key ][ $nt ]++;

         // if( $nt == 'A' ) {

         //    echo "<span style=\"color:red\">$nt</span>";
         // }
         // if( $nt == 'T' ) {

         //    echo "<span style=\"color:orange\">$nt</span>";
         // }

         $nts_printed++;

         if( $nts_printed % 30 === 0 ) {

            $output .= "\n";
         }
      }
   }

   echo "<pre>";
      print_r( $prct );
   echo "</pre>";
   echo "Place TOC here";

   echo "<ol>";
      foreach( $headers as $id => $header_name ) {

         echo "<li>";
            echo "<a href=\"#$id\">$header_name</a>";
         echo "</li>";
      }
   echo "</ol>";

   echo "<pre>";
      echo $output;
   echo "</pre>";


   foreach( $prct as $header_name => $nt_list ) {

      $tot_amount_of_nts = 0;
      foreach( $nt_list  as $nt => $count ) {

         $tot_amount_of_nts += $count;
      }
      echo "<h6>% of NTs for $header_name: <h6>";

      echo "<div class=\"plotwrap\">";

      foreach( $nt_list  as $nt => $count ) {
         
         $p = round($count / $tot_amount_of_nts * 100, 1 );
         echo "<div class=\"barwrap\">";

            echo "<div class=\"barfill\" style=\"width: $p%;\">";
               echo "$nt: $p%";
            echo "</div>";

         echo "</div>";
      }

      echo "</div>";
   }
}

?>

</body>
</html>
