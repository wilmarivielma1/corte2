<?php

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = test_input($_POST["nombre"]);
    $apellido = test_input($_POST["apellido"]);
    $email = test_input($_POST["email"]);
    $telefono = test_input($_POST["telefono"]);

    $datos_usuario = [
        "Nombre" => $nombre,
        "Apellido" => $apellido,
        "Correo Electrónico" => $email,
        "Número de Teléfono" => $telefono
    ];

    echo "<h1>Datos del Usuario:</h1>";
    echo "<ul>";
    foreach ($datos_usuario as $campo => $valor) {
        echo "<li><strong>$campo:</strong> $valor</li>";
    }
    echo "</ul>";
}
?>
