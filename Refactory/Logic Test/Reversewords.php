<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reverse Words</title>
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
         font-size: 20px;
        }
       </style>
  </head>
  <body>

   <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1>Cek Kata Terbalik</h1><br>
      <input type="text" name="kalimat" placeholder="Masukan Kalimat">
      <input type="submit" name="submit" value="Cek">
   </form>

   <div class="result">
      <?php 
         if (isset($_POST['submit'])) {
            $kalimat = $_POST['kalimat'];
            $pecah = explode(' ', $kalimat);
            $jumlah = count($pecah);
            $arr = 0;
            $kata = "";
            for ($i=$arr; $i <= $jumlah; $i++) { 
              $arr = $arr+1;
              @$balik = strrev($pecah[$i]);
              @$split = str_split($pecah[$i]);
              @$cek = $split[0];

              if (ctype_upper($cek)) {
                $kecil = strtolower($balik);
               echo ucfirst($kecil)." ";
              }else{
                $kecil = strtolower($balik);
               echo $kecil." ";
              }
            }
          }


       ?> 
    </div>
  </body>
</html>