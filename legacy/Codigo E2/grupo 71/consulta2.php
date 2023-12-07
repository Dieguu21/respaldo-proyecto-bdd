<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Dado un artista, entregue el número de entradas de cortesía que ha entregado
    require("../Sites/conexion.php");

    $nombre_escenico = $_POST["nombre_escenico"];
    
    $query = "SELECT artistas.nombre_escenico, COUNT(cid) FROM artistas, entradascortesia WHERE artistas.aid = entradascortesia.aid AND lower(artistas.nombre_escenico) LIKE lower('%$nombre_escenico%') GROUP BY artistas.aid;";
    
    $result = $db -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();
    ?>
    <h3>Artistas</h3>
    <table border="1">
        <tr>
            <th>Nombre Escénico</th>
            <th>Cantidad Entradas Cortesía Entregadas</th>
        </tr>

            <?php
                foreach ($artistas as $a) {
                    echo "<tr><td>$a[0]</td><td>$a[1]</td></tr>";
            }
            ?>

    </table>

    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">

<!-- <?php include('../templates/footer.html'); ?> -->