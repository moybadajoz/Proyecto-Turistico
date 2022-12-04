<?php
include("conexion.php");
$conn = conectar();
$Nombre = $_POST['Nombre'];
$Correo= $_POST['Correo'];
$pass= $_POST['pass'];

$sql = "INSERT INTO usuario VALUES(null,'$Nombre','$Correo','$pass')";
$ejecutar = mysqli_query($conn, $sql);

if($ejecutar){
    Header("Location: login.php");
}else {
    echo $ejecutar;
}
?>
