<?php
    include("conexion.php");
    $conn = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $ubicacion = $_POST['ubicacion'];
    $costo = $_POST['costo'];
    $publico = $_POST['publico'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];
    try{
    if(!file_exists($_FILES['img']['tmp_name']) || !is_uploaded_file($_FILES['img']['tmp_name'])){
        $sql = "UPDATE evento SET nombre='$nombre', fecha='$fecha', horario='$hora',ubicacion='$ubicacion', costo='$costo', 
            publico='$publico', disciplina='$disciplina', tipo_evento='$tipo' WHERE id='$id'";
    }else{
        echo "dasda";
        $imagen = $_FILES['img']['tmp_name'];
        $file_name = $_FILES['img']['name'];
        
        $save_path="./img/db/" . $file_name ."";
        move_uploaded_file($imagen, $save_path);

        $sql = "UPDATE evento SET nombre='$nombre', imagen='$file_name', fecha='$fecha', horario='$hora',ubicacion='$ubicacion', costo='$costo', 
            publico='$publico', disciplina='$disciplina', tipo_evento='$tipo' WHERE id='$id'";
    }
    
    $query = mysqli_query($conn, $sql);
    if($query){
        Header("Location: eventos.php");
    } else{
        echo $query;
    }
    }catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>    