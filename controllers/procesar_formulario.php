<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST['nombre']) || empty($_POST['edad'])) {
        http_response_code(400); // Método no permitido
        echo json_encode(["message" => "Los campos nombre y edad son obligatorios"]);
        return;
    }
    if (!is_numeric($_POST['edad']) || $_POST['edad'] < 1 || $_POST['edad'] > 120) {
        http_response_code(400); // Método no permitido
        echo json_encode(["message" => "La edad debe ser un número entre 1 y 120"]);
        return;
    }
    echo json_encode(["message" => "Los datos se han procesado correctamente"]);
} else {
    // Si la solicitud no es POST, responder con un error
    http_response_code(405); // Método no permitido
    echo json_encode(["message" => "Método no permitido"]);
}
