<?php
include('../../templates/header.html');
require("../../config/conexion.php"); 
require("../../usuarios/obtener_usuario.php");

session_start();
$productora = $_SESSION['username'];
?>

<br>
<h1>Eventos programados</h1>
<br>

<!-- Form para filtrar por range de fechas-->
<h3>Filtrar por fecha</h3>
<form action="eventos_programados_filtrados.php" method="post">
<table>
    <td><input type="date" name="fecha_inicio" placeholder="Fecha inicio" required></td>
    <td><input type="date" name="fecha_termino" placeholder="Fecha termino" required></td>
    <td><input type="submit" name="submit" value="Filtrar"><br><br></td>
</table>

<?php
$productora = obtenerNombreOriginalProductora($productora);

$query = "SELECT DISTINCT Evento.nombre, Evento.inicio, Evento.termino FROM Evento, Productoras, ProducidoPor WHERE Productoras.nombre = '$productora' AND Productoras.id = ProducidoPor.id_productora AND Evento.id = ProducidoPor.id_evento ORDER BY Evento.inicio;";
$result = $db78 -> prepare($query);
$result -> execute();
$evento = $result -> fetchAll();
?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Fecha de inicio</th>
        <th>Fecha de termino</th>
    </tr>
    <?php
    foreach ($evento as $e) {
        echo "<tr><td>$e[0]</td><td>$e[1]</td><td>$e[2]</td></tr>";
    }
    ?>
</table>

</body>

</html>