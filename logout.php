<?php
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redireccionar al usuario a la página de inicio
header('Location: index.html');
exit(); // Asegurar que el script se detenga después de redireccionar
?>
