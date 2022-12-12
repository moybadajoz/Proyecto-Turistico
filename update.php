<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    
    
    if (password_verify($pass2, $pass)) {
        
        $sql = "UPDATE usuario SET pass='$pass' WHERE CUT = '$id'";
        $ejecutar = mysqli_query($conn, $sql);
        //destruir las variables
        $pass = null;
        $pass2 = null;
        $sql = null;
        header('location: registrar.php');
    } else {
        echo '<script>alert("Las contraseñas no son iguales")</script>';
    }

    $query = mysqli_query($conn, $sql);
    if($query){
        Header("Location: registrar.php");
    }

?>