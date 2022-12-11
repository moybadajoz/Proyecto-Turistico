<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM evento";
    $ejecutar = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="./css/style_eventos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce1ae3c06d.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container">
        <div class="tabla">
            <div class="tabla-titulo">
                <div class="texto">
                    <h1>Eventos Registrados</h1>
                </div>
            </div>
            <table>
                <thead class="tabla-h">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Fecha-Horario</th>
                        <th>Ubicacion</th>
                        <th>Costo</th>
                        <th>Pulico</th>
                        <th>Disciplina</th>
                        <th>Tipo</th>
                        <th>info</th>
                    </tr>
                </thead>
                <tbody class="tabla-r">
                    <tr>
                        <td colspan="9">
                            <button type="button" class="add"></button>
                        </td>
                    </tr>
                    <?php while($row = mysqli_fetch_array($ejecutar)){?>
                        <tr>
                            <td><?php echo '<img  class="img" src="data:imagen/*;base64,'.base64_encode($row['imagen']).'"/>';?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['fecha']?><br><?php echo $row['horario']?></td>
                            <td><?php echo $row['ubicacion']?></td>
                            <td>$<?php echo $row['costo']?></td>
                            <td><?php echo $row['publico']?></td>
                            <td><?php echo $row['disciplina']?></td>
                            <td><?php echo $row['tipo_evento']?></td>
                            <td><button type="button" class="info"><i class="fa-solid fa-circle-info"></i></button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>