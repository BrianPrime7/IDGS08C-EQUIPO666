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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPETS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="styles.css">
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
            
		</div>
		<form action="logout.php" method="post">
            <button type="submit" class="logout-button">Cerrar Sesión</button>
            </form>

	</header>

	<section class="home" id="home">

		<div class="content">
			<h3>DISPETS</h3>
			<span>¿QUIENES SOMOS?</span>
			<p>
           Somos una empresa que busca ayudar a nuestros clientes a poder llevar un control de la alimentación de su mascotas sin la necesidad de estar en casa.
       </p>
       <a href="#" class="btn"> Compra ahora</a>
		</div>
	</section>
     
     <section class="icons-container">
     	
     	<div class="icons">
     		<img src="icon-1.png" alt="">
     		<div class="info">
     			<h3>Entrega gratis</h3>
     			<span>En todos los pedidos</span>
     		</div>
     	</div>

     	<div class="icons">
     		<img src="icon-2.png" alt="">
     		<div class="info">
     			<h3>Devoluciones en 10 dias</h3>
     			<span>Devolución de dinero garantizada</span>
     		</div>
     	</div>

     	<div class="icons">
     		<img src="icon-3.png" alt="">
     		<div class="info">
     			<h3>ofertas</h3>
     			<span>En todos los pedidos</span>
     		</div>
     	</div>

     	<div class="icons">
     		<img src="icon-4.png" alt="">
     		<div class="info">
     			<h3>pagos seguros</h3>
     		<span>Tu pago sera seguro.</span>
     		</div>
     	</div>
     </section>

     <section class="products" id="products">

     	<h1 class="heading">PRODUCTOS</h1>

     	<div class="box-container">
     		
     		<div class="box">
     			<span class="discount">-10%</span>
     			<div class="image">
     				<img src="chico.jpg" alt="">
     				<div class="icons">
     					<a href="#" class="fas fa-heart"></a>
     					<a href="#" class="cart-btn">Agregar al carrito</a>
     					<a href="#" class="fas fa-share"></a>
     				</div>
     	</div>
     	<div class="content">
     		<h3>Dispensador Chico</h3>
     		<div class="price">$1000<span></span></div>
     	</div>
     	</div>

     	     		<div class="box">
     			<span class="discount">-10%</span>
     			<div class="image">
     				<img src="mediano.jpg" alt="">
     				<div class="icons">
     					<a href="#" class="fas fa-heart"></a>
     					<a href="#" class="cart-btn">Agregar al carrito</a>
     					<a href="#" class="fas fa-share"></a>
     				</div>
     	</div>
     	<div class="content">
     		<h3>Dispensador Mediano</h3>
     		<div class="price">$1300<span></span></div>
     		<a href="http://localhost/awos/E-commerce/" class="btn"> Realiza tu pago</a>
     	</div>
     	</div>
     	

     	     		<div class="box">
     			<span class="discount">-10%</span>
     			<div class="image">
     				<img src="grande.jpg" alt="">
     				<div class="icons">
     					<a href="#" class="fas fa-heart"></a>
     					<a href="#" class="cart-btn">Agregar al carrito</a>
     					<a href="#" class="fas fa-share"></a>
     				</div>
     	</div>
     	<div class="content">
     		<h3>Dispensador Grande</h3>
     		<div class="price">$1800<span></span></div>
     	</div>
     	</div>

     </section>

     <section class = "review" id ="review">

     	<h1 class="heading"> COMENTARIOS <span></span></h1> 

     	<div class="box-container">

     		<div class="box">

     		<div class="stars">
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     		</div>
     		<p>Recomendado</p>
     		<div class="user">
     			<img src="pic-1.jpg" alt="">
     			<div class="user-info">
     				<h3>Johana Ramirez</h3>
     				<span>happy customer</span>
     			</div>
     	</div>
     	<span class="fas fa-quote-right"></span>
     </div>
     
     <div class="box">
     <div class="stars">
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     		</div>
     		<p>Muy buen producto, me ayudo mucho con mi mascota</p>
     		<div class="user">
     			<img src="pic-2.jpg" alt="">
     			<div class="user-info">
     				<h3>Jan Carlo Arellno</h3>
     				<span>happy customer</span>
     			</div>
     	</div>
     	<span class="fas fa-quote-right"></span>
     </div>
     
     <div class="box">
     <div class="stars">
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     			<i class="fas fa-star"></i>
     		</div>
     		<p>Excelente servicio</p>
     		<div class="user">
     			<img src="pic-3.png" alt="">
     			<div class="user-info">
     				<h3>Gisela Hernandez</h3>
     				<span>happy customer</span>
     			</div>
     	</div>
     	<span class="fas fa-quote-right"></span>
     </div>
     </section>
<section class="contact" id="contact">
	<h1 class="heading"><span>CONTACTO </span></h1>

	<div class="row">

		<form action="">
			<input type="text" placeholder="nombre" class="box">
			<input type="email" placeholder="email" class="box">
			<input type="number" placeholder="numero" class="box">
			<textarea name="" class="box" placeholder="Mensaje" id="" cols="30" rows="10"></textarea>

			<input type="submit" value ="Enviar" class="btn">

		</form>

		<div class="image">
			<img src="img.jpg" alt="">
		</div>
	</div>
</section>

<section class="footer">

	<div class="box-container">

		<div class="box">
			<h3>ENLACES RAPIDOS</h3>
			<a href="http://localhost/INTEGRADORA/seguridad/">Crud</a>
			<a href="#">home</a>
			<a href="#">productos</a>
			<a href="#">comentarios</a>
			<a href="#">contacto</a>
		</div>

		<div class="box">
			<h3>ENLACES EXTRA</h3>
			<a href="http://localhost/INTEGRADORA/seguridad/">Mi Cuenta</a>
			<a href="#">Mi Pedido</a>
			<a href="#">Mi favorito</a>
		</div>

		<div class="box">
			<h3>UBICACIONES</h3>
			<a href="#">García</a>
			<a href="#">Santa Catarina</a>
			<a href="#">Monterrey</a>
			<a href="#">Guadalupe</a>
		</div>

		<div class="box">
			<h3>CONTACTO</h3>
			<a href="">(55) 1234-5678</a>
			<a href="#">dispets@gmail.com</a>
			<a href="#">Santa Catarina 501</a>
		
		</div>
	</div>
	<div class="credit">Creada por <span>	Gabriela Sauceda</span></div>
</section>
<script src="script.js"></script>
</body>
</html>




