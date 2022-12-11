<?php
    include("conexion.php");
    $conexion = conectar();
    $id = $_GET['CUT'];
    $sql = "SELECT * FROM usuario WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $Nombre = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_actualizar.css">
    <title>CRUD PHP - Update</title>
</head>
<body>
    <div class="container">
        <div class="titulo">Datos del Alumno</div>
        <div class="inputs">
                <input type="hidden" name="id" value="<?php echo $Nombre['CUT']?>">
                <input type="text" name="Nombre" class="form" placeholder="Nombre" style="" value="<?php echo $Nombre['Nombre']?>"> 
                <input type="email" name="Correo" class="form"  placeholder="Correo" value="<?php echo $nombre['Correo']?>">
                <input type="password" name="pass" class="form" placeholder="Contraseña" value="<?php echo $nombre['pass']?>"> 
                <input type="submit" value="Actualizar" class="btn" >
        </div>
    </div>    
</body>
</html>