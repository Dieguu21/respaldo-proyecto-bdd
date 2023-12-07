<?php 
include('../../templates/header.html');
require("../../config/conexion.php");
?>

<body>

    <?php
        // $variable = $_POST["nombre_variable"];
        $query = "SELECT evento.nombre, evento.fecha, recintos.nombre_recinto FROM eventos, recintos WHERE eventos.rid = recintos.rid AND ;";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $evento = $result -> fetchAll();
    ?>

    <table>
        <?php
        
        ?>
        
    </table>

</body>

<?php 
include('../../templates/footer.html');
?>