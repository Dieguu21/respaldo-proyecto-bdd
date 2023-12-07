<?php 
include('../templates/header.html');   
require("../config/conexion.php");
require("../usuarios/obtener_usuario.php");
session_start();   #agregado
$artista = $_SESSION['username'];?>

<?php
        $query = "SELECT * FROM propuestas WHERE lower(artistas) LIKE lower('%$artista%');";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $dataCollected = $result -> fetchAll();
?>
<body>
    <h2>Propuestas de evento</h2>
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
            $prod = obtenerNombreOriginalProductora($p[6])
            echo "<tr>
                <td>$p[1]</td>
                <td>$p[2]</td>
                <td>$p[3]</td>
                <td>$p[4]</td>
                <td>$p[5]</td>
                <td>$prod</td></tr>";}
        ?>
    </table>
    <?php include('../templates/footer.html');   ?>
</body>
</html>