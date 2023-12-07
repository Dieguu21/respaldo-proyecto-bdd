<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Dado un artista, entregue el número de entradas de cortesía que ha entregado
    require("../Sites/conexion.php");

    $nombre_escenico = $_POST["nombre_escenico"];
    
    $query = "SELECT DISTINCT productoras.nombre from productoras, actuaen, manejadopor, artistas WHERE artistas.aid = actuaen.aid and actuaen.eid = manejadopor.eid and manejadopor.pid = productoras.pid and  lower(artistas.nombre_escenico) LIKE lower('%$nombre_escenico%');";

    $result = $db -> prepare($query);
    $result -> execute();
    $productoras = $result -> fetchAll();
    ?>
    <table border="1">
        <tr>
            <th>Productoras</th>
        </tr>

            <?php
                foreach ($productoras as $p) {
                    echo "<tr><td>$p[0]</td></tr>";
            }
            ?>

    </table>
    
    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">

<!-- <?php include('../templates/footer.html'); ?> -->