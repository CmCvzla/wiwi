<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = md5($_POST['contraseña']); // Mejor usar password_hash en producción
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

// Registrar en la tabla registro
$sql = "INSERT INTO registro (usuario, password, telefono, correo) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $usuario, $contraseña, $telefono, $correo);

if ($stmt->execute()) {
    // También lo agregamos a la tabla login para que pueda iniciar sesión
    $sql2 = "INSERT INTO login (usuario, password) VALUES (?, ?)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->bind_param("ss", $usuario, $contraseña);
    $stmt2->execute();
    $stmt2->close();

    echo "<script>alert('Usuario registrado correctamente. Ahora puedes iniciar sesión.'); window.location.href='../login.php';</script>";
} else {
    echo "<script>alert('Error al registrar usuario: " . $stmt->error . "'); window.location.href='../login.php';</script>";
}
$stmt->close();
$conn->close();
?>