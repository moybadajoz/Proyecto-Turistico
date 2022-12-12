<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE CUT='$id'";
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
        <div class="titulo">Cambiar Contraseña</div>
        
        <form action="update.php" method="POST">
            <div class="inputs">
                    <input type="hidden" name="id" value="<?php echo $Nombre['CUT']?>">
                    <input type="correo" name="Nombre" class="form" placeholder="Nombre" style="" value="<?php echo $Nombre['Nombre']?>" disabled> 
                    <input type="email" name="Correo" class="form"  placeholder="Correo" value="<?php echo $Nombre['Correo']?>" disabled>
                    <input type="password" name="pass" class="form" placeholder="Contraseña" value=""> 
                    <input type="password" name="pass2" class="form" placeholder="Contraseña" value="">
                    <button type="submit" class="btn"> Actualizar</button>
            </div>
        </form>
    </div>    
</body>
</html>