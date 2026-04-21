<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Farmacia Brasil</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="contenedor login-box">
        <h2>Iniciar sesión</h2>
        <form action="validar_login.php" method="POST">
            <label>Usuario</label>
            <input type="text" name="usuario" required>

            <label>Contraseña</label>
            <input type="password" name="password" required>

            <button type="submit">Ingresar</button>
        </form>
        <a class="btn-secundario" href="index.php">Volver</a>
    </div>
</body>
</html>