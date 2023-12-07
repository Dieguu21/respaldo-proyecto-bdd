<?php 
include('../../templates/header.html');
require("../../config/conexion.php");
session_start();
?>

<body>
    <br><br><br><br>
    <?php
        $eid_evento = $_POST['eid'];
        $query = "SELECT artistas.nombre_escenico FROM artistas, actuaen WHERE actuaen.eid = '$eid_evento' AND actuaen.aid = artistas.aid;";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $artistas = $result -> fetchAll();
    ?>

    <table border="1">
        <tr>
            <th>Artistas que participan</th>
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