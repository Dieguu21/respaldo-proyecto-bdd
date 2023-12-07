<?php 
include('../../templates/header.html');
require("../../config/conexion.php");
session_start();   #agregado
$artista = $_SESSION['username'];
?>

<body>
<?php
    $query = "SELECT nombre_estadia, categoria_traslado  FROM paquetesviajes, viajaen, artistas WHERE artistas.aid = viajaen.aid AND  viajaen.codigo = paquetesviajes.codigo AND lower(replace(artistas.nombre_escenico,' ','')) LIKE lower('$artista');";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $dataCollected = $result -> fetchAll();
?>

<body>
    <h2>Historial de Estadias</h2>
    <table>
        <tr>
            <th>Nombre Estadia</th>
            <th>Categoria Traslado</th>
        </tr>
        <?php 
        foreach ($dataCollected as $v) {
            echo "<tr>
                <td>$v[0]</td>
                <td>$v[1]</td></tr>";}
        ?>
    </table>
    <?php include('../../templates/footer.html');   ?>
</body>
</html>