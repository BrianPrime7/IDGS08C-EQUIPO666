<?php
session_start(); // Iniciar la sesión

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginEmail = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_EMAIL);
    $loginPassword = filter_input(INPUT_POST, 'loginPassword', FILTER_SANITIZE_STRING);

    // Realizar más validaciones si es necesario

    if (empty($loginEmail) || empty($loginPassword)) {
        $response = array('message' => 'Todos los campos son obligatorios');
    } else {
        // Verificar las credenciales en la base de datos
        $stmt = $conn->prepare("SELECT id, correo, clave FROM usuarios WHERE correo = ?");
        $stmt->bind_param("s", $loginEmail);
        $stmt->execute();
        $stmt->bind_result($userId, $userEmail, $hashedPassword);
        $stmt->fetch();
        $stmt->close();

        if ($hashedPassword && password_verify($loginPassword, $hashedPassword)) {
            // Iniciar sesión y guardar datos en variables de sesión
            $_SESSION['userId'] = $userId;
            $_SESSION['userEmail'] = $userEmail;

            $response = array('message' => 'Inicio de sesión exitoso');
        } else {
            $response = array('message' => 'Credenciales incorrectas');
        }
    }

    echo json_encode($response);
}

$conn->close();
?>
