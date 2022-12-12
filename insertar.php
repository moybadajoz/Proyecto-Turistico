<?php
include("conexion.php");
$conn = conectar();
try {
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    echo $pass . "<br>" . $pass2;

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuario WHERE Correo='$Correo'";
    $ejecutar = mysqli_query($conn, $sql);
    
    $resultado = mysqli_fetch_array($query);
    if (!$ejecutar) {
        echo '<script>alert("El Correo ya esta registrado")</script>';
        //header('location: registrar.php');
    } else {
        
        if (password_verify($pass2, $pass)) {
            
            $sql = "INSERT INTO usuario VALUES(null,'$Nombre','$Correo','$pass')";
            $ejecutar = mysqli_query($conn, $sql);
            //destruir las variables
            $pass = null;
            $pass2 = null;
            $sql = null;
            header('location: login.php');
        } else {
            echo '<script>alert("Las contraseñas no son iguales")</script>';
        }
    }
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
