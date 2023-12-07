<?php
include('../../templates/header.html');
require("../../config/conexion.php"); ?>

<br>
<h1>Eventos aprobados</h1>
<br>
<h3>Filtrar por fecha</h3>
<form action="eventos_aprobados_filtro.php" method="post">
<table>
    <td><input type="date" name="fecha_inicio" placeholder="Fecha inicio" required></td>
    <td><input type="date" name="fecha_termino" placeholder="Fecha termino" required></td>
    <td><input type="submit" name="submit" value="Filtrar"><br><br></td>
    </table>
<?php
session_start();
$productora = $_SESSION['username'];
$productora = strtolower($productora);
$productora = str_replace('_', ' ', $productora);

$query = "SELECT * from propuestas WHERE propuestas.productora = '$productora' ORDER BY propuestas.inicio;";
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
            $query = "SELECT estado FROM decisionpropuesta WHERE idpropuesta = $e[0];";
            $result = $db71 -> prepare($query);
            $result -> execute();
            $estados = $result -> fetchAll();
            # Si todos los estados son 'aprobado', entonces el evento está aprobado
            $aprobado = True;
            foreach ($estados as $estado) {
                if ($estado[0] != 'aprobado') {
                    $aprobado = False;
                }
            }
            if ($aprobado) {
                echo "<tr><td>$e[1]</td><td>$e[2]</td><td>$e[3]</td><td>$e[4]</td><td>$e[5]</td><td>$e[8]</td><td>$e[9]</td></tr>";
            }
        }
        ?>
    </table>