<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];
    $pass = $_POST['pass'];
    $sql = "UPDATE usuario SET Nombre = '$nombre', Correo='$correo', pass='$pass' WHERE CUT='$id'";
    
    $query = mysqli_query($conn, $sql);
    if($query){
        Header("Location: registrar.php");
    }

?>