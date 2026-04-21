<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include("conexion.php");

$nombre = trim($_POST['nombre']);
$categoria = trim($_POST['categoria']);
$precio = trim($_POST['precio']);
$descripcion = trim($_POST['descripcion']);
$stock = trim($_POST['stock']);
$estado = trim($_POST['estado']);

if (empty($nombre) || empty($categoria) || empty($precio) || $stock === "" || empty($estado)) {
    echo "Todos los campos obligatorios deben completarse";
    exit();
}

if (!is_numeric($precio) || $precio <= 0) {
    echo "El precio debe ser válido";
    exit();
}

if (!is_numeric($stock) || $stock < 0) {
    echo "El stock debe ser válido";
    exit();
}

if ($descripcion == "") {
    $descripcion = NULL;
}

$stmt = $conexion->prepare("INSERT INTO medicamentos (nombre, categoria, precio, descripcion, stock) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdsi", $nombre, $categoria, $precio, $descripcion, $stock);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Error al guardar el medicamento";
}
?>