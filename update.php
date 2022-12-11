<?php
    include("conexion.php");
    $conn = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $imagen = $_POST['imagen'];
    $horario = $_POST['horario'];
    $ubicacion = $_POST['ubicacion'];
    $costo = $_POST['costo'];
    $publico = $_POST['publico'];
    $disiplina = $_POST['disiplina'];
    $tipo_evento = $_POST['tipo-evento'];

    $sql = "UPDATE evento SET nombre='$nombre', imagen='$imagen', horario='$horario',ubicacion='$ubicacion', costo='$costo', 
            publico='$publico', disiplina='$disiplina', tipo_evento='$tipo_evento' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        Header("Location: index.php");
    } else{
        echo $query;
    }
?>    