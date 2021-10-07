<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Palindrome</title>
      <style>
        *{
         margin: 0 auto;
         box-sizing: border-box;
         text-align: center;
        }
        form{
         margin-top: 10em;
         padding: 40px 20px;
         width: 30em;
        }
        input{
         padding: 10px;
        }
        .result{
         width: 32em;
         padding: 20px 20px;
         text-transform: capitalize;
         font-size: 20px;
        }
        strong{
         padding: 5px;
         border-radius: 3px;
        }
       </style>
  </head>
  <body>

   <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1>Cek Palindrome</h1><br>
      <input type="text" name="palindrome" placeholder="Masukan Kata">
      <input type="submit" name="submit" value="Cek">
   </form>

   <div class="result">
      <?php 
         if (isset($_POST['submit'])) {
            $palindrome = $_POST['palindrome'];
            $split = str_split($palindrome);
            $jumlah = strlen($palindrome);
            $kata = "";
            for ($i=($jumlah-1); $i >= 0; $i--) { 
              $kata .= $split[$i];
            }

            if (strtolower($palindrome)==strtolower($kata)) {
             echo "Kata <strong>$palindrome</strong> adalah Palindrom";
            }else{
             echo "Kata <strong>$palindrome</strong> bukan Palindrom";
            }
          }
       ?> 
    </div>
  </body>
</html>