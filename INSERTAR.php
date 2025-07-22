<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Si tienes contraseña, escríbela aquí
$base_de_datos = "cafe_aroma";

// Crear conexión
$conexionb = new mysqli("localhost", "root", "", "cafe_aroma");

// Verificar conexión
if ($conexionb->connect_error) {
    die("Conexión fallida: " . $conexionb->connect_error);
}

// Obtener datos del formulario
$id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];

// Preparar la sentencia SQL
$sql = "INSERT INTO usuario (	Cliente_id, Nombre, Correo, telefono, contrasena)
        VALUES ('$id_usuario', '$nombre', '$correo','$telefono','$contrasena')";

$tbvir = mysqli_query($conexionb,$sql);

// Ejecutar y verificar
if($tbvir){
    echo "Se agrego la compra correctamente";
} else {
    echo "No se pudo agregar".mysqli_error($conexionb);
}

// Cerrar conexión

mysqli_close($conexionb);
?>
