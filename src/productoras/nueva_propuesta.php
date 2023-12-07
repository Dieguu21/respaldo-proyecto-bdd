<?php 
include('../templates/header.html'); 
require("../config/conexion.php"); 
require("../usuarios/obtener_usuario.php");
session_start();

$nombre = $_POST['nombre'];
$inicio = $_POST['inicio'];
$termino = $_POST['termino'];
$recinto = $_POST['recinto'];
$artistas = $_POST['artistas'];
$productora = $_SESSION['username'];
$productora = strtolower($productora);
$productora = str_replace('_', ' ', $productora);

$hospedaje = $_POST['hospedaje'];
$traslado = $_POST['traslado'];

$query = "SELECT id FROM productoras WHERE nombre = '$productora';";
$result = $db78 -> prepare($query);
$result -> execute();
$id_productora = $result -> fetchAll();
?>

<body>
    <?php
    $all_artistas = explode(",", $artistas);
    foreach ($all_artistas as $a) {
        $nombre_usuario = obtenerNombreUsuarioArtista($a);

        # revisar si el artista tiene un usuario
        $query = "SELECT * FROM usuarios WHERE nombre = '$nombre_usuario';";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $user = $result -> fetchAll();
        if (sizeof($user) == 0) {
            $_SESSION['artista_sin_usuario'] = $a;
            header("Location: index.php");
            exit();
        }
    }
    $query = "INSERT INTO propuestas (nombre, inicio, termino, recinto, artistas, productora, estado, hospedaje, traslado) VALUES ('$nombre', '$inicio', '$termino', '$recinto', '$artistas', '$productora', '-', '$hospedaje', '$traslado');";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $_SESSION['artista_sin_usuario'] = NULL;

    $query = "SELECT id FROM propuestas WHERE nombre = '$nombre' AND inicio = '$inicio' AND termino = '$termino' AND recinto = '$recinto' AND artistas = '$artistas' AND productora = '$productora';";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $id_propuesta = $result -> fetchAll();
    $id_propuesta = $id_propuesta[0][0];

    foreach ($all_artistas as $a) {
        $query = "INSERT INTO decisionpropuesta (id_propuesta, artista, estado) VALUES ('$id_propuesta', '$a', '-');";
        $result = $db71 -> prepare($query);
        $result -> execute();
    }
    ?>

    <br><br><h2 align='center'>Propuesta Creada</h2><br><br>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Fecha Término</th>
            <th>Recinto</th>
            <th>Artistas</th>
        </tr>
        <?php
        echo "<tr><td>$nombre</td><td>$inicio</td><td>$termino</td><td>$recinto</td><td>$artistas</td></tr>";
        ?>
    </table>

<br><br>
<form action="index.php" method="get">
    <input type="submit" value="Volver">
</form>

</body>
</html>