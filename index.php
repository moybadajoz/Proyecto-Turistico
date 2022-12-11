<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM  evento ";
    $ejecutar = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_index.css">
    <enlace rel="preconectar" href="https://fonts.googleapis.com">
    <link rel="preconectar" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Noto+Serif & display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce1ae3c06d.js" crossorigin="anonymous"></script>
</head>
<body>
<!--div class="general "></div> 
<div id="header" class="header">
        <a >
            <div class="titulo">
            <font  color="#FFFFF">GUANAJUATO</font>
            </div>
           <div class="descripccion"> 
           <font  color="#FFFFF">Patrimonio de la huminidad</font>
         </div>
         </div>
   </div>
   <div class="content">
<p> <font  color="#FFFFF">
El Poder Público únicamente puede lo que la Ley le concede y el gobernado todo lo que ésta no le prohíbe.
La Ley establecerá sistemas de impugnación y medios de defensa de los derechos de los particulares frente a los actos de las autoridades.
La Ley determinará la organización, funcionamiento, competencia y procedimientos de un organismo estatal de protección de los derechos humanos, dotado de plena autonomía, que conocerá de quejas en contra de actos u omisiones de naturaleza administrativa provenientes de cualquier autoridad o servidor público de carácter estatal o municipal que violen estos derechos, formulará acuerdos o recomendaciones públicas, no vinculatorias, denuncias y quejas ante las autoridades respectivas.
Este organismo no será competente para conocer de quejas que se originen con motivo de acuerdos o decisiones de instancias electorales, ni tratándose de resoluciones de naturaleza jurisdiccional; pero podrá conocer de asuntos de orden administrativo de los órganos de impartición de justicia que transgredan derechos humanos.</font>
</font></p>
</div>
    <div filtros>
    <a class="boton">UBICACION</a>
    <a class="boton">COSTO</a>
    <a class="boton">CATEGORIA</a>
    <a class="boton">DISIPLINA</a>
    <a class="boton">TIPO PUBLICO</a>
    <a class="boton">CATEGORIA</a>
    </div>
    
    <div class="fechas">
        <div class="article">
            <h2>
                <a href="#" title="link to this post"></a>
                <label for="start">
                <font  color="#FFFFF">Seleccionar dia</font>
                </label>
                <input type="date" id="start" name="trip-start"
               value="2018-07-22"
                min="2022-11-25" max="2024-12-31">
            </h2>
    <div class="vista">
      
       
        
    </div> 
-->
<div class="navbar">
    <div class="logo">
        <img src="./img/logo-guanajuato.png" alt="">
    </div>
    <div class="botones">
      <a class="text" href="#"><font color=#00000>PUBLICO</font></a>
    </div>
    <div class="botones">
      <a href="#" class="text"><font color=#00000>DISCIPLINA</font></a>
    </div>
    <div class="botones">
      <a href="#" class="text"><font color=#00000>TIPO DE EVENTO</font></a>
    </div>
    <div class="botones">
      <a href="" class="text"><font color=#00000>UBICACION</font></a>
    </div>
    <div class="dia">
        <h2>
        <label for="start">
        <font  color="#00000">FECHA</font>
        </label>
        <input type="date" id="start" name="trip-start" value="2018-07-22"min="2022-11-25" max="2024-12-31">
        </h2>
</div>
    </div>

</div>
<div class="content">
<div class="general "></div> 
<div id="header" class="header">
        <a >
            <div class="titulo">
            <font  color="#FFFFF">GUANAJUATO</font>
            </div>
           <div class="descripccion"> 
           <font  color="#FFFFF">Patrimonio de la huminidad</font>
         </div>
         </div>
         <p> <font  color="#00000">

</font></p>

  <div class="container-card">
  
  <div class="card">
    <figure>
      <img src="./img/GtoMomias02.jpg">
    </figure>
    <div class="contenido-card">
      <h3>Panteon de Santa Paula</h3>
      <p>Recorrido por el museo de las momias</p>
      <a href="#">Información</a>
    </div>
  </div>

  <div class="card">
    <figure>
      <img src="./img/obra1.jpg">
    </figure>
    <div class="contenido-card">
      <h3>Homilética I</h3>
      <p>Portal de tareas de Homilética I</p>
      <a href="#">Acceder</a>
    </div>
  </div>

  <div class="card">
    <figure>
      <img src="./img/obra2.jpg">
    </figure>
    <div class="contenido-card col-4">
      <h3>Introducción al Antiguo Testamento</h3>
      <p>Portal de tareas de Introducción al Antiguo Testamento</p>
      <a href="#">Acceder</a>
    </div>
  </div>
</div>

<div class="container-card">

  <div class="card">
    <figure>
      <img src="./img/obra6.jpg">
    </figure>
    <div class="contenido-card">
      <h3>Evangelios</h3>
      <p>Portal de tareas de Evangelios</p>
      <a href="#">Acceder</a>
    </div>
  </div>

  <div class="card">
    <figure>
      <img src="./img/obra4.jpg">
    </figure>
    <div class="contenido-card">
      <h3>Homilética I</h3>
      <p>Portal de tareas de Homilética I</p>
      <a href="#">Acceder</a>
    </div>
  </div>

  <div class="card">
    <figure>
      <img src="./img/obra5.jpg">
    </figure>
    <div class="contenido-card col-4">
      <h3>Introducción al Antiguo Testamento</h3>
      <p>Portal de tareas de Introducción al Antiguo Testamento</p>
      <a href="#">Acceder</a>
    </div>
  </div>
</div> 

</div>

</body>
</html>