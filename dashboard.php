<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel - Farmacia Brasil</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="contenedor">
        <h1>Bienvenido al sistema</h1>
        <p>Usuario: <?php echo $_SESSION['usuario']; ?></p>

        <a class="btn" href="agregar_medicamento.php">Agregar medicamento</a>
        <a class="btn-secundario" href="cerrar_sesion.php">Cerrar sesión</a>
    </div>
</body>
</html>