
<!-- <<?php include('../templates/header.html');   ?> -->
<body>
<?php
    #Entregue un listado del nombre y teléfono de contacto de todos los artistas
    require("../Sites/conexion.php");
    $query = "SELECT nombre_escenico, telefono_contacto FROM artistas;";
    $result = $db -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();
    ?>
    <h3>Artistas</h3>
    <table border="1">
        <tr>
            <th>Nombre Escénico</th>
            <th>Teléfono contacto</th>
        </tr>

            <?php
                foreach ($artistas as $a) {
                    echo "<tr><td>$a[0]</td><td>$a[1]</td></tr>";
            }
            ?>

    </table>

    <form align="center" action="index.php" method="post">
    <input type="submit" value="Volver">
  </form>

<!-- <?php include('../templates/footer.html'); ?> -->