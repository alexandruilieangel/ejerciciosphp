<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $nacimiento = new DateTime($fecha_nacimiento);
    $anio_nacimiento = $nacimiento->format('Y');

    // Los 12 animales del horóscopo chino
    $horoscopo_chino = array(
        0 => "Rata",
        1 => "Buey",
        2 => "Tigre",
        3 => "Conejo",
        4 => "Dragón",
        5 => "Serpiente",
        6 => "Caballo",
        7 => "Cabra",
        8 => "Mono",
        9 => "Gallo",
        10 => "Perro",
        11 => "Cerdo"
    );

    // Calcular el animal según el año de nacimiento
    $animal = $horoscopo_chino[$anio_nacimiento % 12];

    // Cualidades asociadas a cada animal
    $qualidades = array(
        "Rata" => "Inteligente, ingeniosa, ambiciosa.",
        "Buey" => "Paciente, confiable, perseverante.",
        "Tigre" => "Valiente, confiado, competitivo.",
        "Conejo" => "Gentil, elegante, generoso.",
        "Dragón" => "Poderoso, confiado, apasionado.",
        "Serpiente" => "Sabia, misteriosa, decidida.",
        "Caballo" => "Libre, apasionado, energético.",
        "Cabra" => "Creativa, amable, artística.",
        "Mono" => "Divertido, inteligente, adaptable.",
        "Gallo" => "Valiente, enérgico, confiado.",
        "Perro" => "Leal, honesto, trabajador.",
        "Cerdo" => "Generoso, amable, honesto."
    );

    // Obtener las cualidades del animal
    $cualidades = $qualidades[$animal];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Horóscopo Chino</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Tu Horóscopo Chino: <?php echo $animal; ?></h1>
        <img src="imagenes/<?php echo $animal; ?>.jpg" alt="<?php echo $animal; ?>" class="horoscopo-img">
        <p><strong>Qualidades de tu signo:</strong> <?php echo $cualidades; ?></p>
        <a href="formulario_horoscopo.html" class="volver">Volver</a>
    </div>
</body>
</html>
