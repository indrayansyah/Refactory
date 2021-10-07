<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JSON Manipulation</title>
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
      <h1>Cari isi JSON</h1><br>
   </form>

   <div class="result">
      <?php 
        $data = file_get_contents("http://localhost/Refactory/JSON%20Manipulation/data.json");
        $json = json_decode($data, TRUE);
        $jumlah = count($json);


        for ($i=0; $i<=$jumlah; $i++){
          @$nomer1 = $json[$i]['placement']['name'];

          if ($key = "Meeting Room"){
            @$item = $json[$i]['name'];
            echo $item.", ";
          }
        }

      ?> 
    </div>
  </body>
</html>

