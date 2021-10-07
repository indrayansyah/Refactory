<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leap Year</title>
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
      <h1>Cek Tahun Kabisat</h1><br>
      <input type="text" name="tahun1" placeholder="Dari Tahun">
      -
      <input type="text" name="tahun2" placeholder="Sampai Tahun">
      <input type="submit" name="submit" value="Cek">
   </form>

   <div class="result">
      <?php 
        if (isset($_POST['submit'])) {
          $tahun1 = $_POST['tahun1'];
          $tahun2 = $_POST['tahun2'];
            for ($i = $tahun1; $i <= $tahun2; $i++) {
              if ($i <= $tahun2){
                $hasil = ($i+1);
            
                if($hasil % 400 == 0){
                  echo $hasil." ";
                }else if(($hasil % 4 == 0) && ($hasil % 100 != 0) && ($hasil % 400 != 0)) {
                  echo $hasil." ";
                } else {
                  echo "";
                }
              }
            }
        }

          
      ?> 
    </div>
  </body>
</html>

