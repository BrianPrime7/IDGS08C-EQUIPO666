<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = password_hash(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);

    // Realizar más validaciones si es necesario

    if (empty($nombre) || empty($apellido) || empty($email) || empty($password)) {
        $response = array('message' => 'Todos los campos son obligatorios');
    } else {
        // Insertar datos en la base de datos
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, correo, clave) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $apellido, $email, $password);

        if ($stmt->execute()) {
            $response = array('message' => 'Registro exitoso');
            
        } else {
            $response = array('message' => 'Error en el registro');
        }

        $stmt->close();
    }

    echo json_encode($response);
}

$conn->close();
?>
