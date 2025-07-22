<?php
// Configuración de la conexión
$host="localhost";  
$usr="root";         
$pass="";            
$nombreBD="cafe_aroma"; 

$conexionb = mysqli_connect("localhost", "root", "", "cafe_aroma");

if ($conexionb -> connect_errno) { 
    die("Error al conectar: " . $conexionb -> connect_errno);
} else {
    echo "Se conectó con éxito <br><hr>";
}

$id_usuario = $_POST['id_usuario'];

$sql = "DELETE FROM usuario WHERE Cliente_id  = '$id_usuario'";

$tbvir = mysqli_query($conexionb,$sql);

if($tbvir){
    echo "Se elimino el usuario correctamente";
} else {
    echo "No se pudo Eliminar".mysqli_error($conexionb);
}
mysqli_close($conexionb);

?>