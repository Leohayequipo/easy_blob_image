<?php
include "conexion.php";
// Obtener el ID de la imagen que deseas mostrar (puedes pasar esto como un parámetro en la URL)
$idImagen = $_GET['id']; // Asegúrate de validar y limpiar esta entrada en un entorno de producción.


$query="SELECT nombre, tipo_mime, imagen FROM imagenes WHERE id = $idImagen";

$res = mysqli_query($con,$query);
while($row=mysqli_fetch_array($res)){
    $imagenBase64 = base64_encode($row['imagen']);
    // Mostrar la imagen en una etiqueta img
    echo '<img src="data:' . $row['tipo_mime'] . ';base64,' . $imagenBase64 . '" alt="' . $row['nombre'] . '">';
}

?>
