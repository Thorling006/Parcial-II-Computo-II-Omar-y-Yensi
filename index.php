<?php
include("conexion.php");
$sql = "SELECT * FROM medicamentos ORDER BY nombre ASC";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Farmacia Brasil</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="contenedor">
        <h1>Farmacia Brasil - Sistema de Medicamentos</h1>
        <a class="btn" href="login.php">Iniciar sesión</a>

        <h2>Listado de medicamentos</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Stock</th>
            </tr>
            <?php while($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['categoria']; ?></td>
                <td>$<?php echo $fila['precio']; ?></td>
                <td><?php echo $fila['descripcion']; ?></td>
                <td><?php echo $fila['stock']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>