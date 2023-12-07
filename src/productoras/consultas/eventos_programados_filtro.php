<?php
include('../../templates/header.html');
require("../../config/conexion.php"); 

$inicio = $_POST["inicio"];
$termino = $_POST["termino"];

echo "<br><h1>Eventos programados entre $inicio y $termino</h1><br>";

session_start();
$productora = $_SESSION['username'];

$query = "SELECT DISTINCT evento.nombre, evento.inicio, Evento.termino FROM Evento, Productoras, ProducidoPor WHERE Evento.id = ProducidoPor.id_evento AND Productoras.nombre = '$productora' AND Productoras.id = ProducidoPor.id_productora AND Evento.inicio >= '$inicio' AND Evento.termino <= '$termino' ORDER BY Evento.inicio ASC;";

$result = $db71 -> prepare($query);
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

<?php include('../../templates/footer.html'); ?>
</body>

</html>