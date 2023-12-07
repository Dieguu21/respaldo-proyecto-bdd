<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Dado un artista, entregue los datos de su último tour (el más reciente)
    require("../Sites/conexion.php");

    $nombre_escenico = $_POST["nombre_escenico"];

    $query = "SELECT DISTINCT artistas.nombre_escenico, tours.nombre, tours.fecha_inicio, tours.fecha_termino FROM tours, eventos, actuaen, artistas WHERE artistas.aid = actuaen.aid AND eventos.eid = actuaen.eid AND eventos.nombre = tours.nombre AND lower(artistas.nombre_escenico) LIKE lower('%$nombre_escenico%') ORDER BY 4 DESC;";

    $result = $db -> prepare($query);
    $result -> execute();
    $tours = $result -> fetchAll();
    ?>
    <h3>Tour</h3>
    <table border="1">
        <tr>
            <th>Artista</th>
            <th>Nombre Tour</th>
            <th>Fecha Inicio</th>
            <th>Fecha Temino</th>
        </tr>

            <?php
                foreach ($tours as $t) {
                    echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td></tr>";
            }
            ?>

    </table>

    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">

<!-- <?php include('../templates/footer.html'); ?> -->