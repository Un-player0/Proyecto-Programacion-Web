<?php
session_start();
include("connection.php");

if (!isset($_SESSION["id_cliente"])) {
    header("Location: ../login.php?login=error&msg=" . urlencode("Debes iniciar sesión para reservar"));
    exit;
}

$id_usuario = $_SESSION["id_cliente"];
$id_local = $_POST["id_local"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$personas = $_POST["personas"];

if (empty($id_local) || empty($fecha) || empty($hora) || empty($personas)) {
    header("Location: ../reservar.php?reserva=error&msg=" . urlencode("Completa todos los campos"));
    exit;
}

if ($personas < 1 || $personas > 20) {
    header("Location: ../reservar.php?reserva=error&msg=" . urlencode("Número de personas inválido"));
    exit;
}

$sql = "INSERT INTO reserva (id_usuario, id_local, fecha, hora, personas, estado)
        VALUES (?, ?, ?, ?, ?, 'pendiente')";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    header("Location: ../reservar.php?reserva=error&msg=" . urlencode("Error interno, intenta de nuevo"));
    exit;
}

$stmt->bind_param("iissi", $id_usuario, $id_local, $fecha, $hora, $personas);

if ($stmt->execute()) {
    header("Location: ../reservar.php?reserva=exito");
} else {
    header("Location: ../reservar.php?reserva=error&msg=" . urlencode("No se pudo crear la reserva"));
}

$stmt->close();
$conn->close();
exit;
?>