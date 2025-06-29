<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = md5($_POST['contraseña']); 

$sql = "SELECT * FROM login WHERE usuario=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $contraseña);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    header("Location: ../home.php");
    exit();
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='../login.php';</script>";
}
$stmt->close();
$conn->close();
?>