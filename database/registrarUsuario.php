<?php

include("connection.php");

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$telefono = $_POST["telefono"];

// Validar que las contraseñas coincidan (defensa en servidor)
if ($password !== $_POST["confirm"]) {
    header("Location: ../login.php?registro=error&msg=" . urlencode("Las contraseñas no coinciden"));
}


// Encriptar contraseña
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Preparar consulta
$sql = "INSERT INTO cliente
(nombres, apellidos, correo, contrasenia, telefono)
VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . $conn->error);
}


$stmt->bind_param(
    "sssss",
    $nombres,
    $apellidos,
    $correo,
    $passwordHash,
    $telefono,
);

if($stmt->execute()){
    // Obtenemos el id que acaba de generar el INSERT
    $idNuevoCliente = $stmt->insert_id;

    // Logeamos automáticamente al usuario recién registrado
    $_SESSION["id_cliente"] = $idNuevoCliente;
    $_SESSION["nombres"] = $nombres;
    $_SESSION["apellidos"] = $apellidos;

    header("Location: ../index.php?registro=exito");
}else{
    header("Location: ../login.php?registro=error&msg=" . urlencode("Ese correo ya está registrado"));
}

$stmt->close();
$conn->close();

?>