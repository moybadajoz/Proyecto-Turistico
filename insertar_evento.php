<?php 
    include("conexion.php");
    $conn = conectar();
    $image = $_FILE['img']['tmp_name'];
    
    echo "Temp name: " . $_FILES['img']['tmp_name'] ."<br>";
    echo "Temp name: " . $_FILES['img']['tmp_name'] ."<br>";
    //$img = base64_encode(file_get_contents($image));
    try {
        $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    } catch(Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $ubicacion = $_POST['ubicacion'];
    $costo = $_POST['costo'];
    $publico = $_POST['publico'];
    $disciplina = $_POST['disciplina'];
    $tipo = $_POST['tipo'];

    $sql = "INSERT INTO evento VALUES(null,'$nombre', '$img','$hora', '$fecha',  '$ubicacion', '$costo', '$publico', '$disciplina', '$tipo')";
    $query = mysqli_query($conn, $sql);
    
    if($query){
       Header("Location: eventos.php");
    }else{
        echo $query;
    }
?>
