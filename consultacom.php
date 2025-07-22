<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "cafe_aroma");

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta a la tabla compras
$sql = "SELECT * FROM compras ORDER BY fecha DESC";
$resultado = $conexion->query($sql);

// Mostrar resultados en tabla HTML con encabezado y pie de página
echo "<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Historial de Compras</title>
  <link rel='stylesheet' href='tasa.css' />
  <style>
    body { font-family: Arial; background: #fffaf0; padding: 20px; margin: 0; }
    table { border-collapse: collapse; width: 100%; background-color: #red; margin-top: 20px; }
    th, td { border: 1px solid #999; padding: 8px; text-align: center; }
    th { background-color: #d9a566; color: brown; }
    tr:nth-child(even) { background-color: #572f1cff; }
    h1 { color: #5c4033; text-align: center; }
    footer { background-color: #333; color: white; padding: 20px; text-align: center; margin-top: 40px; }
    .footer-contenido { display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; }
    .footer-texto p { margin: 5px 0; }
    .img-footer { width: 30px; margin: 0 10px; }
    nav ul { list-style: none; display: flex; justify-content: center; gap: 15px; padding: 10px; background-color: #d9a566; }
    nav ul li a { color: white; text-decoration: none; font-weight: bold; }
    header { background-color: #fff3e0; padding: 10px 0; text-align: center; }
    .logo img { width: 50px; vertical-align: middle; }
    .logo h1 { display: inline; margin-left: 10px; color: #5c4033; }
  </style>
</head>
<body>

  <header>
    <div class='logo'>
      <img src='aroma.png' alt='Logo Café Aroma'>
      <h1>CAFETERÍA AROMA</h1>
    </div>
    <nav>
      <ul>
        <li><a href='index.html'>INICIO</a></li> 
        <li><a href='historia.html'>CONÓCENOS</a></li>
        <li><a href='Alimentos.html'>MODIFICAR</a></li>
      </ul>
    </nav>
  </header>

  <h1>🧾 Historial de Compras</h1>
  <table>
    <tr>
      <th>ID Compra</th>
      <th>Fecha</th>
      <th>Producto</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </tr>";

// Mostrar datos
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila['id_compra'] . "</td>
                <td>" . $fila['fecha'] . "</td>
                <td>" . $fila['producto'] . "</td>
                <td>" . $fila['cantidad'] . "</td>
                <td>$" . number_format($fila['subtotal'], 2) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay compras registradas.</td></tr>";
}

echo "</table>

  <footer>
    <div class='footer-contenido'>
      <div class='footer-texto'>
        <p>Todos los derechos reservados</p>
        <p>@cafeteriaaroma</p>
        <p>Jonathan Jatsbany Nicolás Arzate<br>Juan Carlos Esquivel Rojas</p>
      </div>
      <div class='redes'>
        <a href='https://wa.me/5210000000000' target='_blank'>
          <img src='piewatsap.jpg' alt='WhatsApp' class='img-footer'>
        </a>
        <a href='https://www.facebook.com/share/1Ami3KjsKd/' target='_blank'>
          <img src='face.jpg' alt='Facebook' class='img-footer'>
        </a>
        <a href='https://www.instagram.com/nicolas_j07j' target='_blank'>
          <img src='instas.jpg' alt='Instagram' class='img-footer'>
        </a>
      </div>
    </div>
  </footer>

</body>
</html>";

// Cierra conexión
$conexion->close();
?>
