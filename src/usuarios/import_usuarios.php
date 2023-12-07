<body>
<br><br>
<?php
    include('../templates/header.html');
    session_start();

    if (empty($_SESSION['import'])) {
        echo "<h2 align='center'>No se importaron artistas ni productoras</h2>";
    }
    
        else {
            if ($_SESSION['import']["artistas"] == 0 and $_SESSION['import']["productoras"] == 0) {
                echo "<h2 align='center'>Se importaron exitosamente todos los</h2>";
                echo "<h2 align='center'>artistas y productoras</h2>";
            } 
    
            else {
                $artistas = $_SESSION['import']["artistas"];
                $productoras = $_SESSION['import']["productoras"];
                echo "<h2 align='center'>Importación exitosa, pero ya existían</h2>";
                echo "<h2 align='center'>$artistas artistas y $productoras productoras con cuentas de usuario</h2>";
            } 
        }
?>
<br>
<br>
<form action="../index.php" method="get">
    <input type="submit" value="Volver">
</form>
</body>

</html>
</body>