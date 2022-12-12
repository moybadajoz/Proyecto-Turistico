<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM usuario";
    $ejecutar = mysqli_query($conn, $sql);
    if(isset($_POST['logout'])){
        session_destroy();
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LC4F - Login</title>
    <link rel="stylesheet" href="./css/style_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./img/logo-guanajuato.png" alt="" class="Gtologo">
        </div>
        <form class="btn-r" action="eventos.php">
            <button href="/registrar.php" type="submit" class="btn-r">Eventos</button>
        </form>
        <form method="post" class="logout">
            <button class="logout" type="submit" name="logout">Logout</button>
        </form>
        <div>
            <h1 class="titulo">Registro de Usuarios</h1>
        </div>
        
        <div>
            <div>
                <form class="login" action="insertar.php" method="post">
                    <input type="text" name="Nombre" placeholder="Ingresa tu nombre completo" class="form">
                    <input type="email" name="Correo" placeholder="Ingresa tu correo" class="form">
                    <input type="password" name="pass" placeholder="Ingresa una contraseña" class="form">
                    <input type="password" name="pass2" placeholder="Repite la contraseña" class="form">
                    <input type="submit" value="Guardar" class="btn" >
                </form>
            </div>
        </div>
<div class ="col-md-8">
    <div class="row">
        <h3 class="text-center">Usuarios del sistema </h3>
    </div>
    <table class= "table">
        <thead class="table-success table-striped">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            <tr>
        <tbody>
            <?php
            while($item = mysqli_fetch_array($ejecutar)){
        ?>
        <tr>
            <td><?php echo $item['CUT'] ?></td>
            <td><?php echo $item['Nombre'] ?></td>
            <td><?php echo $item['Correo'] ?></td>
            <td>
                <a href="actualizar.php?id=<?php echo $item['CUT'] ?>"
                   class="btn btn-warning" >Cambiar contraseña</a>
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