<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Dado un tour, liste los países que serán visitados en dicho tour
    require("../Sites/conexion.php");

    $nombre_tour = $_POST["nombre_tour"];

    $query = "SELECT DISTINCT recintos.pais FROM artistas, eventos, recintos, tours, actuaen WHERE artistas.aid = actuaen.aid AND eventos.eid = actuaen.eid AND eventos.nombre = tours.nombre AND eventos.rid = recintos.rid AND lower(tours.nombre) LIKE lower('%$nombre_tour%');";
    
    $result = $db -> prepare($query);
    $result -> execute();
    $pais = $result -> fetchAll();
    ?>
    <h3>Países</h3>
    <table border="1">
        <tr>
            <th>País</th>
        </tr>

            <?php
                foreach ($pais as $p) {
                    echo "<tr><td>$p[0]</td></tr>";
            }
            ?>

    </table>

    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">
  </form>

<!-- <?php include('../templates/footer.html'); ?> -->