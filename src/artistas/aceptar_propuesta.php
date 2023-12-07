<?php 
include('../templates/header.html'); 
require("../config/conexion.php"); 
$decision = $_POST["decision"];
$id = $_POST["id"];
session_start();
$artista = $_SESSION['username'];
?>

<body>
    <br><br><br><br>
    <?php
    if ($decision == 'aceptar') {
        echo "<h2 align='center'>Propuesta Aceptada</h2>";
        $query = "UPDATE decisionpropuesta SET estado = 'aprobado' WHERE id_propuesta = '$id' AND lower(replace(artista,' ','')) LIKE lower('%$artista%');";
        $result = $db71 -> prepare($query);
        $result -> execute();

        $query = "UPDATE propuestas SET estado = 'aprobado' WHERE id = '$id';";

    } else {
        echo "<h2 align='center'>Propuesta Rechazada</h2>";
        $query = "UPDATE propuestas SET estado = 'rechazado' WHERE id = '$id';";
    }
    $result = $db71 -> prepare($query);
    $result -> execute();

   ?>

<br><br>
<form action="consultas/consulta4.php" method="get">
    <input type="submit" value="Volver">
</form>

</body>
</html>