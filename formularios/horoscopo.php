<?php
// Suponiendo que ya tienes la edad calculada y el año de nacimiento
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$nacimiento = new DateTime($fecha_nacimiento);
$anio_nacimiento = $nacimiento->format('Y');

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

$animal = $horoscopo_chino[$anio_nacimiento % 12];

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

echo "<h1>Tu Horóscopo Chino: $animal</h1>";
echo "<img src='imagenes/$animal.jpg' alt='$animal' />";
echo "<p><strong>Qualidades:</strong> " . $qualidades[$animal] . "</p>";
?>
