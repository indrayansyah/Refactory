<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nearest Fibonacci</title>
      <style>
        *{
         margin: 0 auto;
         box-sizing: border-box;
         text-align: center;
        }
        form{
         margin-top: 10em;
         padding: 40px 20px;
         width: 40em;
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
      <h1>Cek Nearest Fibonacci</h1><br>
      <input type="text" name="angka1" placeholder="Masukkan Angka">
      <input type="text" name="angka2" placeholder="Masukkan Angka">
      <input type="text" name="angka3" placeholder="Masukkan Angka">
      <input type="submit" name="submit" value="Cek">
   </form>

   <div class="result">
      <?php 
        if (isset($_POST['submit'])) {
          $angka1 = $_POST['angka1'];
          $angka2 = $_POST['angka2'];
          $angka3 = $_POST['angka3'];
          $jumlah = $angka1+$angka2+$angka3;

          function cari_fibonacci($urutan)
            {
              $angka_sebelumnya = 0;
              $angka_sekarang = 1;

              $angka1 = $_POST['angka1'];
              $angka2 = $_POST['angka2'];
              $angka3 = $_POST['angka3'];
              $jumlah = $angka1+$angka2+$angka3;
              
              for ($i=0; $i<$urutan-1; $i++)
              {
                $output = $angka_sekarang + $angka_sebelumnya;
                $angka_sebelumnya = $angka_sekarang;
                $angka_sekarang = $output;

                if ($output >= $jumlah){
                  $hasil = $output - $jumlah;
                }else {
                  return $output;
                }
              }
              return $hasil;
            }
          echo cari_fibonacci(2);

        }

          
      ?> 
    </div>
  </body>
</html>

