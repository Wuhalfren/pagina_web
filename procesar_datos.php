<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agradecimiento</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $genero = $_POST["genero"];
        $pais = $_POST["pais"];
        $comentarios = $_POST["comentarios"];

        echo "<h2>Gracias por apoyar al medio ambiente, $nombre.</h2>";
    } else {
        header("Location: inscripcion.html");
    }
    ?>
</body>
</html>
