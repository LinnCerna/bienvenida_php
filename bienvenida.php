<?php
$nombre_alumno = "Fátima";
$nombre_tarea = "Tarea 2.5: Pagina con varias ramas";
$fecha = "10 de noviembre de 2026";
$escuela = "CBTis 217";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Bienvenido...</h1>

    <p>Nombre del alumno: <?php echo $nombre_alumno; ?></p>
    <p>Nombre de la tarea: <?php echo $nombre_tarea; ?></p>
    <p>Fecha: <?php echo $fecha; ?></p>
    <p>Escuela: <?php echo $escuela; ?></p>

    <a href="saludos.php">Ir a Saludos</a>

</body>
</html>