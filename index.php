<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['userId'])) {
    // Redireccionar al usuario a la página de inicio de sesión si no está autenticado
    header('Location: index.html');
    exit(); // Asegurar que el script se detenga después de redireccionar
}

// El usuario está autenticado, puedes acceder a $_SESSION['userId'] y otros datos de sesión aquí
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <header class="header">

		<input type="checkbox" name="" id="toggler">
		<label for="toggler" class="fas fa-bars"></label>
		
		<a href="dispets.php" class="logo">Dispets<span>.</span></a>

		<nav class = "navbar">
			<a href="#home">home</a>
			<a href="#products">productos</a>
			<a href="#review">comentarios</a>
			<a href="#contact">contacto</a>
		</nav>

		<div class="icons">
			<a href="#" class="fas fa-heart"></a>
			<a href="cart.php" class="fas fa-shopping-cart" id="cart-bt"></a>
            <form action="logout.php" method="post">
            <button type="submit" class="logout-button">Cerrar Sesión</button>
            </form>
		</div>

	</header>

    <div class="container">
        <div class="tabs">
            <div class="tab" onclick="openTab('register')">Registro</div>
            <div class="tab" onclick="openTab('login')">Iniciar sesion</div>
        </div>
        <div id="register" class="tab-content">
            <h2>Registro</h2>
            <form id="registerForm" onsubmit="registerUser(event)">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" pattern="[A-Za-záéíóúüñÑ\s]+" title="Solo se permiten letras y espacios" required>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" pattern="[A-Za-záéíóúüñÑ\s]+" title="Solo se permiten letras y espacios" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Contraseña (al menos 8 caracteres, una mayúscula, una minúscula y un número):</label>
                <input type="password" id="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" title="Debe contener al menos 8 caracteres, una mayúscula, una minúscula y un número" required>

                <button type="submit">Registrar</button>
            </form>
        </div>
        <div id="login" class="tab-content">
            <h2>Login</h2>
            <form id="loginForm" onsubmit="loginUser(event)">
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="loginEmail" required>

                <label for="loginPassword">Contraseña:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>

                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

