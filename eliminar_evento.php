<?php
    include("conexion.php");
    $conn = conectar();
    $id = $_GET['id'];
    $sql = "DELETE FROM evento WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        Header("Location: eventos.php");
    }

?>