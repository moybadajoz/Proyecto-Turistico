<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM usuario";
    $ejecutar = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <h1 class="text-center">Inicie Sesion </h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <h3 class="text-center">Ingresa Datos</h3>
</div>
<form action="insertar.php" method="post">
    <input type="text"
           name="Nombre"
           placeholder="Ingresa tu nombre completo"
           class="form-control mb-3">
    <input type="text"
           name="Correo"
           placeholder="Ingresa tu correo"
           class="form-control mb-3">
    <input type="text"
           name="pass"
           placeholder="Ingresa tu contraseña"
           class="form-control mb-3">
    <input type="submit"
           value="Guardar"
           class="btn btn-success block">
</form>
</div>
<div class ="col-md-8">
    <div class="row">
        <h3 class="text-center">Usuarios del sistema </h3>
    </div>
    <table class= "table">
        <thead class="table-success table-striped">
            <tr>
                <th >Nombre</th>
                <th>Correo</th>
        <tbody>
            <?php
            while($item=mysqli_fetch_array($ejecutar)){
        ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['Nombre'] ?></td>
            <td><?php echo $item['Correo'] ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $item['CUT'] ?>"
                   class="btn btn-warning" >Editar</a>
                 <a class="btn btn-primary" href="borrar.php?id=<?php echo $item['CUT'] ?>" class="btn btn-danger">Borrar</a>
      </div>
    </div>
  </div>
</div>
            </td>
        </tr>
        <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>