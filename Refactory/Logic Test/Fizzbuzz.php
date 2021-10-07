<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FizzBuzz</title>
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
      <h1>Cek FizzBuzz</h1><br>
      <input type="text" name="angka" placeholder="Masukan angka">
      <input type="submit" name="submit" value="Cek">
   </form>

   <div class="result">
      <?php 
        if (isset($_POST['submit'])) {
          $angka = $_POST['angka'];
            for ($i = 0; $i <= $angka; $i++) {
              if ($i <= $angka){
                $hasil = ($i+1);
            
                if(($hasil % 3 == 0) && ($hasil % 5 == 0)){
                  echo "FizzBuzz, ";
                }else if($hasil % 3 == 0){
                  echo "Fizz, ";
                }else if($hasil % 5 == 0){
                  echo "Buzz, ";
                } else {
                  echo $hasil.", ";
                }
              }
            }
        }


       ?> 
    </div>
  </body>
</html>