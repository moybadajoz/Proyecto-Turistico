<?php

    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM  evento ";
    $query = mysqli_query($conn, $sql);

    $response = json_decode(file_get_contents("http://api.weatherapi.com/v1/forecast.json?key=1c578acddf924c9c90c150158221012&q=Guanajuato&days=7&aqi=no&alerts=no"));
    $forecast = $response->forecast->forecastday;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_index.css">
    <link rel="preconect" href="https://fonts.googleapis.com">
    <link rel="preconect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce1ae3c06d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="navbar">
    <div class="logo">
        <img src="./img/logo-guanajuato.png" alt="">
    </div>
    <div class="social-media">
      <div class="facebook" onclick="location.href='https://www.facebook.com/gobiernogto/';">
        <i class="fa-brands fa-square-facebook"></i>
      </div>
      <div class="instagram" onclick="location.href='https://www.instagram.com/gobiernogto';">
      <i class="fa-brands fa-instagram"></i>
      </div>
      <div class="twitter" onclick="location.href='https://twitter.com/gobiernogto';">
      <i class="fa-brands fa-twitter"></i>
      </div>
    </div>
  </div>

  <div class="content">
    <div id="header" class="header">
                <div class="titulo">
                <font  color="#FFFFF">GUANAJUATO</font>
                </div>
              <div class="descripccion"> 
              <font  color="#FFFFF">Patrimonio de la huminidad</font>
              </div>
    </div>
  
  <div class="container-card">
    <div class="card card-info">
        <figure>
            <?php foreach($forecast as $day){ ?>
                <img class="clima-icon" src="<?php echo $day->day->condition->icon ?>" alt="">
            <?php } ?>
        </figure>
        <?php foreach($forecast as $day){ ?>
            <h2 class="clima-info"><?php echo $day->date ."<br>". $day->day->avgtemp_c."??C"?></h2> 
        <?php } ?>
    </div>
    <?php while( $card = mysqli_fetch_array($query)){?>
      <div class="card">
        <figure>
          <img src="./img/db/<?php echo $card['imagen'] ?>">
        </figure>
        <div class="contenido-card col-4">
          <h2> <?php echo $card['nombre'] ?> </h2>
          <h5> <?php echo $card['ubicacion'] ?><br>
               <?php echo $card['fecha'] . " / " . $card['horario'] ?> <br>
               $<?php echo $card['costo'] ?><br>
               <?php echo $card['publico'] .' / '.$card['disciplina'] .' / '.$card['tipo_evento']?></h5>
               <a href="#">Mas Informaci??n</a>
        </div>
      </div>
    <?php } ?>
  </div>


    
  

</div>

</body>
</html>