<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Fasta Generator</title>
   <style type="text/css">
      label {

         display: block;
         margin: 5px;
         padding: 5px;
      }

      input[type=submit] {

         display: block;
         width: 100%;
         margin: 15px 0;
      }

      .form {

         box-sizing: border-box;
         padding: 0 2em;
         position: fixed;
         left: 0;
         top: 0;
         width: 550px;
      }

      .fasta {

         margin-left: 600px;
         border-left: solid #eee 5px;
         padding-left: 50px;
      }

      .warning {

         color: orange;
      }

   </style>
</head>
<body>

   <div class="form">

      <h2>Generate a random fasta sequence</h2>
      <form action="#" method="get">
         <label>
            Sequence header:
            <input type="text" value="" name="header">
         </label>

         <label>
            Sequence Alphabet:
            <input type="text" value="" placeholder=" e.g.: ATCG" name="alphabet">
         </label>

         <label>
            Total number of nucleotides:
            <input type="number" name="tot_nt" value="">
         </label>

         <label>
            Number of nucleotides per line:
            <input type="number" name="nt_per_line" value="">
         </label>

         <input type="submit" value="Generate" name="submit">
      </form>
   </div>


</body>
</html>

