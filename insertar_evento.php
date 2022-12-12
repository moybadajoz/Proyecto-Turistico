<?php 
    include("conexion.php");
    $conn = conectar();

    $imagen = $_FILES['img']['tmp_name'];
    $file_name = $_FILES['img']['name'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $ubicacion = $_POST['ubicacion'];
    $costo = $_POST['costo'];
    $publico = $_POST['publico'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];
    
    $save_path="./img/db/" . $file_name ."";
    move_uploaded_file($imagen, $save_path);
    
    $sql = "INSERT INTO evento VALUES(null, '$nombre', '$file_name','$hora', '$fecha', '$ubicacion', '$costo', '$publico', '$disciplina', '$tipo')";
    $query = mysqli_query($conn, $sql);

    if($query){
       Header("Location: eventos.php");
    }else{
        echo $query;
    }
?>
