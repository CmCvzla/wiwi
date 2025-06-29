<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "yogurt_sistema";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>