<?php
session_start();
include("conexion.php");

$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);

if (empty($usuario) || empty($password)) {
    echo "Todos los campos son obligatorios";
    exit();
}

$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
$stmt->bind_param("ss", $usuario, $password);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
} else {
    echo "Usuario o contraseña incorrectos";
}
?>