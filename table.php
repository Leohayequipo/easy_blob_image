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
        <td>ver imagen</td>
    </tr>
 
  ";
}
echo "</table>";

?>
