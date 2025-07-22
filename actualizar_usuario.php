<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "cafe_aroma");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
$id_usuario = $_POST['Cliente_id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar la contraseña

// Actualizar datos del usuario
$sql = "UPDATE usuario SET 
        nombre = ?, 
        correo = ?, 
        telefono = ?, 
        contrasena = ?
        WHERE Cliente_id = ?";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . $conexion->error);
}

$stmt->bind_param("ssssi", $nombre, $correo, $telefono, $contrasena, $id_usuario);

if ($stmt->execute()) {
    echo "<script>alert('Datos actualizados correctamente.'); window.location.href='actualizar_usuario.html';</script>";
} else {
    echo "Error al actualizar: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>
