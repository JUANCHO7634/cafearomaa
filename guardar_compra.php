<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = ""; // Si tienes contraseña, escríbela aquí
$base_de_datos = "cafe_aroma";

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir datos en formato JSON
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["estado" => "error", "mensaje" => "No se recibieron datos."]);
    exit;
}

$id_compra = $conexion->real_escape_string($data['id_compra']);
$fecha = $conexion->real_escape_string($data['fecha']);
$productos = $data['productos']; // array de productos

$todoBien = true;

// Insertar cada producto
foreach ($productos as $producto) {
    $nombre = $conexion->real_escape_string($producto['nombre']);
    $cantidad = intval($producto['cantidad']);
    $subtotal = floatval($producto['subtotal']);

    $sql = "INSERT INTO compras (id_compra, fecha, producto, cantidad, subtotal)
            VALUES ('$id_compra', '$fecha', '$nombre', $cantidad, $subtotal)";

    if (!$conexion->query($sql)) {
        $todoBien = false;
        break;
    }
}

if ($todoBien) {
    echo json_encode(["estado" => "ok", "mensaje" => "Compra guardada exitosamente."]);
} else {
    echo json_encode(["estado" => "error", "mensaje" => "Error al guardar la compra: " . $conexion->error]);
}

// Cerrar conexión
mysqli_close($conexion);
?>
