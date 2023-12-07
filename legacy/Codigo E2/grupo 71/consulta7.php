
<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Muestre al artista que ha entregado la mayor cantidad de entradas de cortesía
    require("../Sites/conexion.php");
    $query = "SELECT artistas.nombre_escenico, COUNT(cid) FROM artistas, entradascortesia WHERE artistas.aid = entradascortesia.aid  GROUP BY artistas.nombre_escenico HAVING COUNT(cid) = (SELECT  COUNT(cid) AS cant_entradas FROM artistas, entradascortesia WHERE artistas.aid = entradascortesia.aid GROUP BY artistas.nombre_escenico ORDER BY cant_entradas DESC LIMIT 1) ORDER BY artistas.nombre_escenico;";
    $result = $db -> prepare($query);
    $result -> execute();
    $artistas_entradas = $result -> fetchAll();
    ?>
    <h3>Artistas</h3>
    <table border="1">
        <tr>
            <th>Nombre Escénico</th>
            <th>Cantidad Entradas Cortesía Entregadas</th>
        </tr>

            <?php
                foreach ($artistas_entradas as $ae) {
                    echo "<tr><td>$ae[0]</td><td>$ae[1]</td></tr>";
            }
            ?>

    </table>

    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">
  </form>

<!-- <?php include('../templates/footer.html'); ?> -->