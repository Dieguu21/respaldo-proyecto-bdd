<?php 
include('../templates/header.html');   
require("../config/conexion.php"); 
require("../usuarios/obtener_usuario.php");
require("consultas/consulta3.php");
session_start();

?>

<body>
    <?php 
    $nombre_usuario = $_SESSION['username'];
    $nombre_escenico = obtenerNombreEscenicoArtista($nombre_usuario);
    
    echo "<br><h1 align='center'>Hola de nuevo, $nombre_escenico</h1>"; 
    ?>

    <br><br><h2>Mis Eventos</h2>

    <!-- Botón Ver propuestas de Eventos (CONSULTA 4)-->
    <div align='left'>
        <button onclick="location.href='consultas/consulta4.php'">Ver propuestas de Eventos</button>
    </div>

    <!-- Botón Ver historial de hospedajes -->
    <div align='left'>
        <button onclick="location.href='consultas/consulta5.php'">Ver historial de hospedajes</button>
    </div>

    <!-- Obtener datos de eventos (CONSULTAS 1 Y 3)-->
    <?php
        $query = "SELECT eventos.nombre, eventos.fecha, recintos.nombre_recinto, eventos.eid FROM eventos, recintos, artistas, actuaen WHERE artistas.nombre_escenico='$nombre_escenico' AND actuaen.aid=artistas.aid AND actuaen.eid = eventos.eid AND eventos.rid = recintos.rid;";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $eventos = $result -> fetchAll();  
    ?>

    <!-- Mostrar la tabla de los eventos -->
    <table border="1">
        <tr>
            <th>Evento</th>
            <th>Fecha</th>
            <th>Recinto</th>
            <th>Otros artistas</th>
            <th>Tour</th>
            <th>Entradas cortesía</th>
        </tr>

        <?php
            foreach ($eventos as $evento) {
                $tour_al_que_pertenece = obtenerTourDeEvento($evento[0]);
                echo 
                "<tr>
                <td>$evento[0]</td>
                <td>$evento[1]</td>
                <td>$evento[2]</td>

                <td><form action='consultas/consulta2.php' method='post'>
                        <input type='hidden' name='eid' value='$evento[3]'>
                        <button type='submit'>Ver</button>
                </form></td>

                <td>$tour_al_que_pertenece</td>

                <td><form action='consultas/consulta6.php' method='post'>
                        <input type='hidden' name='eid' value='$evento[3]'>
                        <button type='submit'>Ver</button>
                </form></td>

                </tr>";
        }
        ?>

    </table>

 <!-- Botón Cerrar sesión -->
    <br>
    <div align='center'>
        <form action='../logout.php' method='post'>
            <button type='submit' name='logout'>Cerrar sesión</button>
        </form>
    </div>

</body>
</html>