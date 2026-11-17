<?php
$nombre = "";
$saludo = "Hola Instructor Fabio";

if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
}

if (strtolower($nombre) === "fabio") {
    echo "<p><span style='font-size: 25px; color: green;'>$saludo</span></p>";
    echo "<img style='width: 300px; height: 300px;' src='https://i.imgflip.com/2/8nwptq.jpg' alt=''>";
} else {
    echo "<p><span style='font-size: 25px; color: blue;'>$nombre</span></p>";
    echo "<img style='width: 300px; height: 300px;' src='https://i.pinimg.com/736x/75/d7/db/75d7db004858723d209d02ba055dbbff.jpg' alt=''>";
}
