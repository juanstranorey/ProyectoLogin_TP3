<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Proyecto Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container" style="text-align: center;">
        <h2>¡Bienvenido al Sistema, <?php echo htmlspecialchars($_SESSION['nombre'] . ' ' . $_SESSION['apellido']); ?>!</h2>
        <p>Has iniciado sesión correctamente.</p>
        <br>
        <a href="index.php" class="btn" style="display: block; text-decoration: none; background-color: #dc3545;">Cerrar Sesión</a>
    </div>
</body>
</html>