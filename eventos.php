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
    
    <div class="modal" id="modal-insert">
        <div class="modal-header">
            <h2>Nuevo Evento</h2>
            <button type="button" onclick="getElementById('modal-insert').style.display = 'none'"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-content">
            <form action="">
                <label for="img-input" class="img-input-label">
                    <input type="file" id="img-input" class="img-input" accept="image/png, image/jpg, image/jpeg">
                </label>
                <input type="text" class="nombre-input" placeholder="Nombre del evento">
                <input type="date" class="fecha-input" placeholder="Fecha del evento">
                <input type="time" class="hora-input" placeholder="Hora del evento">
                <input type="text" class="ubicacion-input" placeholder="Ubicacion del evento">
                <input type="text" class="costo-input" placeholder="Costo del evento">
                <input type="text" class="publico-input" placeholder="Publico">
                <input type="text" class="disciplina-input" placeholder="Disciplina">
                <input type="text" class="tipo-input" placeholder="Tipo de evento">

                <div class="modal-footer">
                    <button type="submit" class="btn-guardar">Guardar</button>
                    <button type="reset" class="btn-cerrar" onclick="getElementById('modal-insert').style.display = 'none'">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="tabla">
            <div class="tabla-titulo">
                <div class="texto">
                    <h1>Eventos Registrados</h1>
                </div>
                <div class="btn">
                    <button type="button" class="add" onclick="getElementById('modal-insert').style.display = 'block'"><i class="fa-solid fa-calendar-days"></i> Nuevo</button>
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
                    <?php while($row = mysqli_fetch_array($ejecutar)){?>
                        <tr>
                            <td><?php echo '<img  class="img" src="data:imagen/jpeg;base64,'.base64_encode($row['imagen']).'"/>';?></td>
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