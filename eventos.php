<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM evento";
    $ejecutar = mysqli_query($conn, $sql);
    if(isset($_POST['logout'])){
        session_destroy();
        header('location: login.php');
    }
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
                <form class="btn-r" action="registrar.php">
                    <button href="/registrar.php" type="submit" class="btn-r">Registrar</button>
                </form>
                <form method="post" class="logout">
                    <button class="logout" type="submit" name="logout">Logout</button>
                </form>
                <form class="btn-i" action="index.php">
                    <button href="/index.php" type="submit" class="btn-i">Inicio</button>
                </form>
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
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="tabla-r">
                    <tr id="btn-add" style="display: revert;" >
                        <td colspan="9"><!--display: none-->
                            <button type="button" class="add" onclick="getElementById('btn-add').style.display ='none'; getElementById('form-add').style.display ='revert'"><i class="fa-solid fa-plus"></i></button>
                        </td>
                    </tr>
                    <tr id="form-add" style="display: none;" >
                        <form method="POST" action="insertar_evento.php" enctype="multipart/form-data">
                            <td><label for="img-input" class="img-input-label" id="img-label">
                                    <input type="file" name="img" id="img-input" class="img-input" accept="image/png, image/jpg, image/jpeg" required onchange="onFileSelected(event)">
                                    <div class="img-in" id="img-in-img-input"><h6 class="file-input" id="file-input"><i class="fa-solid fa-camera"></i><br>Foto</h6></div>
                                    <img class="img" id="image-img-input" style="display:none;">
                                </label></td>
                            <td><input type="text" name="nombre" class="nombre-input" placeholder="Nombre del evento" required></td>
                            <td><input type="date" name="fecha" class="fecha-input" placeholder="Fecha del evento" required>
                                <input type="time" name="hora" class="hora-input" placeholder="Hora del evento" required></td>
                            <td><input type="text" name="ubicacion" class="ubicacion-input" placeholder="Ubicacion del evento" required></td>
                            <td><input type="text" name="costo" class="costo-input" placeholder="Costo del evento" required></td>
                            <td><input type="text" name="publico" class="publico-input" placeholder="Publico" required></td>
                            <td><input type="text" name="disciplina" class="disciplina-input" placeholder="Disciplina" required></td>
                            <td><input type="text" name="tipo" class="tipo-input" placeholder="Tipo de evento" required></td>
                            <td><button type="submit" class="info" id="guardar"><i class="fa-solid fa-floppy-disk"></i></button></td>
                        </form>
                    </tr>
                    <?php while($row = mysqli_fetch_array($ejecutar)){?>
                        <tr id="row-<?php echo $row['id']?>" style="display: revert;">
                            <td><?php echo '<img  class="img" src="./img/db/'.$row['imagen'].'"/>';?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['fecha']?><br><?php echo $row['horario']?></td>
                            <td><?php echo $row['ubicacion']?></td>
                            <td>$<?php echo $row['costo']?></td>
                            <td><?php echo $row['publico']?></td>
                            <td><?php echo $row['disciplina']?></td>
                            <td><?php echo $row['tipo_evento']?></td>
                            <td><button type="button" class="info" onclick="getElementById('row-<?php echo $row['id']?>').style.display ='none'; getElementById('edit-<?php echo $row['id']?>').style.display ='revert'"><i class="fa-solid fa-pen-to-square"></i></button>
                                <a type="button" class="info-a info" href="eliminar_evento.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-trash-can"></i></a></td>

                        </tr>
                        <tr id="edit-<?php echo $row['id']?>" style="display: none;" >
                            <form method="POST" action="update_evento.php" enctype="multipart/form-data">
                                <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
                                <td><label for="<?php echo $row['id']?>" class="img-input-label" id="img-label">
                                        <input type="file" name="img" id="<?php echo $row['id'] ?>" class="img-input" accept="image/png, image/jpg, image/jpeg" onchange="onFileSelected(event)">
                                        <div class="img-in" id="img-in-<?php echo $row['id']?>" style="display: none;"><h6 class="file-input" id="file-input"><i class="fa-solid fa-camera"></i><br>Foto</h6></div>
                                        <img class="img" id="image-<?php echo $row['id']?>" src="/img/db/<?php echo $row['imagen']?>">
                                    </label></td>
                                <td><input type="text" name="nombre" class="nombre-input" placeholder="Nombre del evento" required value="<?php echo $row['nombre']?>"></td>
                                <td><input type="date" name="fecha" class="fecha-input" placeholder="Fecha del evento" required value="<?php echo $row['fecha']?>">
                                    <input type="time" name="hora" class="hora-input" placeholder="Hora del evento" required value="<?php echo $row['horario']?>"></td>
                                <td><input type="text" name="ubicacion" class="ubicacion-input" placeholder="Ubicacion del evento" required value="<?php echo $row['ubicacion']?>"></td>
                                <td><input type="text" name="costo" class="costo-input" placeholder="Costo del evento" required value="<?php echo $row['costo']?>"></td>
                                <td><input type="text" name="publico" class="publico-input" placeholder="Publico" required value="<?php echo $row['publico']?>"></td>
                                <td><input type="text" name="disciplina" class="disciplina-input" placeholder="Disciplina" required value="<?php echo $row['disciplina']?>"></td>
                                <td><input type="text" name="tipo" class="tipo-input" placeholder="Tipo de evento" required value="<?php echo $row['tipo_evento']?>"></td>
                                <td><button type="submit" class="info" id="guardar"><i class="fa-solid fa-floppy-disk"></i></button>
                                    <button type="reset" class="info" onclick="getElementById('row-<?php echo $row['id']?>').style.display ='revert'; getElementById('edit-<?php echo $row['id']?>').style.display ='none'"><i class="fa-solid fa-xmark"></i></button></td>

                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="./js/eventos.js"></script>
</html>