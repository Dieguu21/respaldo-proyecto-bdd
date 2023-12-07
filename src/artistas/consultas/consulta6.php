<?php 
include('../../templates/header.html');
require("../../config/conexion.php");
require("../../usuarios/obtener_usuario.php");
session_start();
?>

<body>
    <br><br><br><br>
    <?php
        $eid_evento = $_POST['eid'];
        $artista = $_SESSION['username'];
        // $artista = $_SESSION['username'];
        //$nombre_escenico = obtenerNombreEscenicoArtistaDoble($_SESSION['username']);

        $query = "SELECT asiento FROM artistas, actuaen, entradascortesia, pertenece WHERE lower(replace(artistas.nombre_escenico,' ','')) LIKE lower('$artista') AND actuaen.aid = artistas.aid AND actuaen.eid = '$eid_evento' AND pertenece.eid = '$eid_evento' AND entradascortesia.cid = pertenece.cid;";
        #$query = "SELECT asiento FROM artistas, actuaen, entradascortesia, pertenece WHERE artistas.nombre_escenico = '$nombre_escenico' AND actuaen.aid = artistas.aid AND actuaen.eid = $eid_evento AND pertenece.eid = $eid_evento AND entradadecortesia.cid = pertenece.cid;";
        // $nombre_escenico = obtenerNombreEscenicoArtista();
        #$query = "SELECT asiento FROM entradascortesia, pertenece WHERE entradascortesia.cid = pertenece.cid AND pertenece.eid = '$eid_evento';";

        #$query = "SELECT asiento FROM artistas, actuaen, entradascortesia, pertenece WHERE lower(replace(artistas.nombre_escenico,' ','')) LIKE lower('%$artista%') AND actuaen.aid = artistas.aid AND actuaen.eid = '$eid_evento' AND pertenece.eid = '$eid_evento' AND entradadecortesia.cid = pertenece.cid;";

        $result = $db71 -> prepare($query);
        $result -> execute();
        $artistas = $result -> fetchAll();
    ?>

    <table border="1">
        <tr>
            <th>Asientos</th>
        </tr>

        <?php
            foreach ($artistas as $a) {
                echo "<tr><td>$a[0]</td></tr>";}
        ?>

    </table>

</body>

<?php 
include('../../templates/footer.html');
?>