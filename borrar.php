<?php
include("conexion.php");
$conn = conectar();
$id = $_GET['id'];
$sql="DELETE FROM usuario WHERE CUT='$id'";
$query = mysqli_query($conn, $sql);
if($query){
    Header("Location: registrar.php");
}else{
    echo $query;
}
?>