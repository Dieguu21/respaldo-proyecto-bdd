<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Dado un artista, liste todos los hoteles en los que se ha hospedado 
    #y cuantas veces se ha hospedado en cada uno (con códigos de reserva distinto, no cantidad de noches)
    require("../Sites/conexion.php");

    $nombre_escenico = $_POST["nombre_escenico"];

    $query = "SELECT artistas.nombre_escenico, paquetesviajes.nombre_estadia, COUNT(paquetesviajes.nombre_estadia) FROM artistas, viajaen, paquetesviajes WHERE paquetesviajes.codigo = viajaen.codigo AND artistas.aid = viajaen.aid AND lower(artistas.nombre_escenico) LIKE lower('%$nombre_escenico%') GROUP BY (paquetesviajes.nombre_estadia, artistas.nombre_escenico) ORDER BY artistas.nombre_escenico;";
    
    $result = $db -> prepare($query);
    $result -> execute();
    $hotel = $result -> fetchAll();
    ?>
    <h3>Hoteles</h3>
    <table border="1">
        <tr>
            <th>Artista</th>
            <th>Nombre estadía</th>
            <th>Cantidad de veces</th>
        </tr>

            <?php
                foreach ($hotel as $h) {
                    echo "<tr><td>$h[0]</td><td>$h[1]</td><td>$h[2]</td></tr>";
            }
            ?>

    </table>

    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">
  </form>

<!-- <?php include('../templates/footer.html'); ?> -->