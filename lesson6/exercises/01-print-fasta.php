<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Print Fasta File</title>
   <style type="text/css">
   .block {

      padding: 1em 0;
   }
   textarea {

      width: 250px;
      height: 50px;
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

      $lines = explode("\n", file_get_contents($_FILES['uploaded_seq']['tmp_name']));
   }
   else {

      die("Invalid upload method");
   }

   # echo "<pre>";
   #    echo "lines: ";
   #    var_dump( $lines );
   # echo "</pre>";

   echo "<pre>";
   $nts_printed = 0;
   $nt_tot_per_seq = [];
   $nt_gc_per_seq = [];
   $header_key = '';
   foreach( $lines as $line ) {

      $line = trim( $line );

      if( preg_match('/^>/', $line) ) {

         $nts_printed = 0;
         $header_key = $line;
         $nt_tot_per_seq[$header_key] = 0;
         $nt_gc_per_seq[$header_key] = 0;

         echo "<h4>";
            echo "$line\n";
         echo "</h4>";

         continue;
      }

      // PRINT X NT's PER LINE
      $nt_arr = str_split( $line );

      foreach( $nt_arr as $nt ) {

         echo "$nt";
         $nts_printed++;
         $nt_tot_per_seq[$header_key]++;

         if( $nt == 'C' or $nt == 'G' ) {

            $nt_gc_per_seq[$header_key]++;
         }

         if( $nts_printed % 30 === 0 ) {

            echo "\n";
         }

      }
   }
   #print_r( $nt_tot_per_seq );
   #print_r( $nt_gc_per_seq );
   echo "</pre>";

   echo "<table>";
   foreach( $nt_tot_per_seq as $header => $tot_count ) {

      echo "<tr>";
         echo "<td>$header</td>";
         echo "<td>".( $nt_gc_per_seq[$header] / $tot_count * 100 )."%</td>";
      echo "</tr>";
   }
   echo "</table>";
}

?>

</body>
</html>
