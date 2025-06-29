<?php
include '../conexion.php';

$id = $_POST['id'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET precio=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("di", $precio, $id);

if ($stmt->execute()) {
    header("Location: ../productos.php");
    exit();
} else {
    echo "<script>alert('Error al actualizar precio: " . $stmt->error . "'); window.location.href='../productos.php';</script>";
}
$stmt->close();
$conn->close();
?>