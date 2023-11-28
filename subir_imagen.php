<?php
include "conexion.php";

// Verificar si se ha enviado un archivo
if (isset($_FILES['imagen'])) {
    $nombre   = $_FILES['imagen']['name'];
    $tipo     = $_FILES['imagen']['type'];
    $tamanio  = $_FILES['imagen']['size'];
    $temp     = $_FILES['imagen']['tmp_name'];
    // Leer el contenido del archivo
    $datos = addslashes(file_get_contents($temp));
    $query="INSERT INTO imagenes (nombre, tipo_mime, imagen) VALUES ( '$nombre', '$tipo', '".$datos."')";
  
    $res=mysqli_query($con,$query);

    // Ejecutar la consulta
    if ($res) {
        echo "Imagen subida correctamente.";
    } else {
        echo "Error al subir la imagen: ";
    }

}
?>
