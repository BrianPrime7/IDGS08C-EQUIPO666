<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['userId'])) {
    header('Location: index.html');
    exit(); // Asegurar que el script se detenga después de redireccionar
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="dispets.php" class="logo">Dispets<span>.</span></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#products">productos</a>
            <a href="#review">comentarios</a>
            <a href="#contact">contacto</a>
        </nav>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a> <!-- Este enlace llevará a la página de carrito -->
            
        </div>
        <form action="logout.php" method="post">
                <button type="submit" class="logout-button">Cerrar Sesión</button>
            </form>
    </header>

    <!-- Contenido de la página del carrito -->
    <section class="cart">
        <h1 class="heading">Carrito de Compras</h1>
        <div class="cart-items">
            <!-- Aquí puedes mostrar los productos que el usuario ha agregado al carrito -->
            <!-- Puedes diseñar esta sección según tus necesidades -->
            <!-- Por ejemplo, podrías usar una tabla para mostrar los productos -->
            <!-- Puedes usar PHP para iterar sobre los productos en el carrito -->
            <!-- Por ejemplo, si tienes un array $_SESSION['cart'] que contiene los productos -->
            <!-- Puedes recorrerlo de esta manera: -->
            <!-- <?php foreach ($_SESSION['cart'] as $product): ?> -->
            <!--     <div class="cart-item"> -->
            <!--         <p><?php echo $product['name']; ?></p> -->
            <!--         <p><?php echo $product['price']; ?></p> -->
            <!--     </div> -->
            <!-- <?php endforeach; ?> -->
        </div>
        <div class="cart-summary">
            <!-- Puedes mostrar un resumen del carrito aquí, como el total de la compra, botones para pagar, etc. -->
        </div>
    </section>

    <footer class="footer">
        <!-- Pie de página -->
    </footer>

    <!-- Agrega tus scripts al final del archivo -->
    <script src="script.js"></script>
</body>
</html>
