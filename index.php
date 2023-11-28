
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>
        <?php
        include "conexion.php";
        $query="SELECT * FROM imagenes WHERE 1";
        echo "<table>
                <tr>
                    <th>nombre</th>
                    <th>ver imagen</th>
                </tr>";
        $res = mysqli_query($con,$query);
        while($row=mysqli_fetch_array($res)){
        echo "
            <tr>
                <td>".$row['nombre']."</td>
                <td> <a href='mostrar_imagen.php?id=".$row['id']."'>
                <button>ver</button>
              </a> 
              
            </tr>
        
        ";
        }
        echo "</table>";

        ?>
    <form action="subir_imagen.php" method="post" enctype="multipart/form-data">
        <label for="imagen">Seleccionar imagen:</label>
        <input type="file" name="imagen" id="imagen" accept="image/*">
        <br>
        <input type="submit" value="Subir Imagen">
    </form>
</body>
</html>
