<?php
// Tarea 2.5 - Pagina de Saludos
$saludo = "Elige un idioma para ver tu saludo";

if (isset($_GET["idioma"])) {
    $idioma = $_GET["idioma"];

    // Saludos tipicos en cada idioma
    if ($idioma == "espanol") {
        $saludo = "¡Hola! ¿Cómo estás?";
    } elseif ($idioma == "ingles") {
        $saludo = "Hello! How are you?";
    } elseif ($idioma == "frances") {
        $saludo = "Bonjour! Comment ça va?";
    } elseif ($idioma == "aleman") {
        $saludo = "Hallo! Wie geht es dir?";
    } elseif ($idioma == "italiano") {
        $saludo = "Ciao! Come stai?";
    } elseif ($idioma == "portugues") {
        $saludo = "Olá! Tudo bem?";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Saludos</h1>
    <p>Elige un idioma:</p>
    <form method="get">
        <select name="idioma">
            <option value="espanol">Español</option>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
            <option value="aleman">Alemán</option>
            <option value="italiano">Italiano</option>
            <option value="portugues">Portugués</option>
        </select>
        <button type="submit">Ver saludo</button>
    </form>
    <h2><?php echo $saludo; ?></h2>

    <a href="bienvenida.php">Regresar a Bienvenida</a>

</body>
</html>