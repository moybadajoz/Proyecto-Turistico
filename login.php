<?php
    include("conexion.php");
    $conn = conectar();

    if(isset($_POST['login'])){

        session_start();
    
        $usuario_login = $_POST['Correo'];
        $contrasena_login = $_POST['pass'];
    
        //verificar que existe el usuario
    
        $sql = "SELECT * from usuario WHERE Correo='$usuario_login'";
        $query = mysqli_query($conn, $sql);
        $usr = mysqli_fetch_array($query);
        
        if(!$usr){
            echo '<script>alert("El usuario no existe")</script>';
        }else{
            if(password_verify($contrasena_login, $usr['pass'])){
                $_SESSION['admin'] = $usuario_login;
                header('location: eventos.php');
            }else{
                echo '<script>alert("Contraseña incorrecta")</script>';
            }
        }
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
        <div>
            <h1 class="titulo">Inicio de Sesion</h1>
        </div>
        <div>
            <div>
                <form class="login" method="POST">
                    <input type="email" name="Correo" placeholder="Ingresa tu correo" class="form">
                    <input type="password" name="pass" placeholder="Ingresa tu contraseña" class="form">
                    <button type="submit" class="btn" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>