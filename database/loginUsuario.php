<?php
session_start();
include("connection.php");

$correo = $_POST["correo"];
$password = $_POST["password"];

// Buscar usuario por correo
$sql = "SELECT id_usuario, nombres, apellidos, contrasenia FROM cliente WHERE correo = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . $conn->error);
}

$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    // No existe ningún usuario con ese correo
    header("Location: ../login.php?login=error");
    exit;
}

$usuario = $resultado->fetch_assoc();

// Verificar la contraseña contra el hash guardado
if (password_verify($password, $usuario["contrasenia"])) {
    // Login correcto: guardamos datos en sesión
    $_SESSION["id_cliente"] = $usuario["id_usuario"];
    $_SESSION["nombres"] = $usuario["nombres"];
    $_SESSION["apellidos"] = $usuario["apellidos"];

    // Redirigir a la página principal (o donde quieras)
    header("Location: ../index.php?login=exito");
    exit;
} else {
    header("Location: ../login.php?login=error");
}

$stmt->close();
$conn->close();
?>