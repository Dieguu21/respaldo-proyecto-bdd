<?php
include('../../templates/header.html');
require("../../config/conexion.php"); 
$inicio = $_POST["fecha_inicio"];
$termino = $_POST["fecha_termino"];
?>

<br>
<h1>Eventos en espera de aprobación</h1>
<br>

<?php
session_start();
$productora = $_SESSION['username'];
$productora = strtolower($productora);
$productora = str_replace('_', ' ', $productora);

$query = "SELECT * from propuestas WHERE propuestas.productora = '$productora' and propuestas.estado = '-' and propuestas.inicio >= '$inicio' and propuestas.termino <= '$termino' ORDER BY propuestas.inicio;";
$result = $db71 -> prepare($query);
$result -> execute();
$evento = $result -> fetchAll();
?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha inicio</th>
            <th>Fecha termino</th>
            <th>Recinto</th>
            <th>Artistas</th>
            <th>Hospedaje</th>
            <th>Traslado</th>
        </tr>
        <?php
        foreach ($evento as $e) {
            echo "<tr><td>$e[1]</td><td>$e[2]</td><td>$e[3]</td><td>$e[4]</td><td>$e[5]</td><td>$e[8]</td><td>$e[9]</td></tr>";
        }
        ?>
    </table>


<br><br>
<form action="../index.php" method="get">
    <input type="submit" value="Volver">
</form>

</body>
</html>