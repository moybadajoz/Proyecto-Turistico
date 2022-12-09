<?php
    include("conexion.php");
    $conexion = conectar();
    $id = $_GET['CUT'];
    $sql = "SELECT * FROM usuario WHERE id='$CUT'";
    $query = mysqli_query($conn, $sql);
    $Nombre = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">Datos del Alumno</div>
        <div class="row">
                <input type="hidden" name="id" value="<?php echo $Nombre['CUT']?>">
                <input type="text" name="Nombre" class="form-control mb-3" placeholder="Nombre" style="" value="<?php echo $Nombre['Nombre']?>"> 
                <input type="text" name="Correo" class="form-control mb-3" placeholder="Correo" value="<?php echo $nombre['Correo']?>">
                <input type="text" name="pass" class="form-control mb-3" placeholder="Contraseña" value="<?php echo $nombre['pass']?>"> 
                <input type="submit" value="Actualizar" class="btn btn-success" >
        </div>
    </div>    
</body>
</html>