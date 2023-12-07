<?php
include('../templates/header.html');
require("../config/conexion.php"); 
session_start();
$productora = $_SESSION['username'];
?>

<body>
    <?php echo "<br><h1 align='center'>Hola de nuevo $productora</h1>"; ?>
    <br><br>
    <h2>Mis Eventos</h2>

    <!-- Eventos programados -->
    <form action='consultas/eventos_programados.php' method='post'>
        <button type='submit' name='logout'>Ver Eventos Programados</button>
    </form>
    <br>

    <!-- Eventos en espera de aprovacion-->
    <form action='consultas/eventos_en_espera.php' method='post'>
        <button type='submit' name='logout'>Ver Eventos en espera de Aprobación</button>
    </form>
    <br>

    <!-- Eventos aprobados -->
    <form action='consultas/eventos_aprobados.php' method='post'>
        <button type='submit' name='logout'>Ver Eventos Aprobados</button>
    </form>
    <br>

    <!-- Eventos rechazados -->
    <form action='consultas/eventos_rechazados.php' method='post'>
        <button type='submit' name='logout'>Ver Eventos Rechazados</button>
    </form>
    <br><br><br><br>
    
    <div>
    <h2>Crear propuesta de evento</h2>
    <h4>(Si no sigue el formato su propuesta podría no ser considerada!)</h4><br>
    <form action="nueva_propuesta.php" method="post">
        <h4>Nombre del evento *</h4>
        <input type="text" name="nombre" required>
        <h4>Fecha de Inicio *</h4>
        <input type="date" name="inicio" required>
        <h4>Fecha de Termino *</h4>
        <input type="date" name="termino" required>
        <h4>Recinto *</h4>
        <input type="text" name="recinto" required>
        <h4>Artistas (Separados por comas) *</h4>
        <?php if (empty($_SESSION['artista_sin_usuario'])) {
            echo "";
        } else {
            echo "<h5>--- El artista " . $_SESSION['artista_sin_usuario'] . " no tiene usuario en la plataforma ---</h5>";
        }
        ?>
        <input type="text" name="artistas" required>
        <h4>Hospedaje</h4>
        <input type="text" name="hospedaje">
        <h4>Traslado</h4>
        <input type="text" name="traslado">
        <br>
        <input type="submit" name="submit" value="Crear propuesta">

    </form>
    </div>

    <br><br>
    <div align='center'>
        <form action='../logout.php' method='post'>
            <button type='submit' name='logout'>Cerrar sesión</button>
        </form>
    </div>
    <br>
</body>
</html>