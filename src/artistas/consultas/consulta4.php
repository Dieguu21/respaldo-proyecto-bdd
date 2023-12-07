<?php 
include('../../templates/header.html');   
require("../../config/conexion.php");
require("../../usuarios/obtener_usuario.php");
session_start();   #agregado
$artista = $_SESSION['username'];?>

<?php
        $query = "SELECT * FROM propuestas WHERE lower(replace(artistas,' ','')) LIKE lower('%$artista%') and propuestas.estado = '-';";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $dataCollected = $result -> fetchAll();
?>
<body>
    <br>
    <h2>Propuestas de evento</h2>
    <br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha de inicio</th>
            <th>Fecha de termino</th>
            <th>Recinto</th>
            <th>Artistas</th>
            <th>Productora</th>
        </tr>
        <?php 
        foreach ($dataCollected as $p) {
            echo "<tr>
                <td>$p[1]</td>
                <td>$p[2]</td>
                <td>$p[3]</td>
                <td>$p[4]</td>
                <td>$p[5]</td>
                <td>$p[6]</td>
                <td><form action='../aceptar_propuesta.php' method='post'>
                    <input type='hidden' name='id' value='$p[0]'>
                    <input type='hidden' name='decision' value='aceptar'>
                    <input type='submit' value='Aceptar'>
                </form></td>
                <td><form action='../aceptar_propuesta.php' method='post'>
                    <input type='hidden' name='id' value='$p[0]'>
                    <input type='hidden' name='decision' value='rechazar'>
                    <input type='submit' value='Rechazar'>
                </form></td></tr>";}
        ?>
    </table>
    <?php include('../../templates/footer.html');   ?>
</body>
</html>