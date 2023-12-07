<?php include('templates/header.html');   
require("config/conexion.php"); ?>

<body>
    <h1 align="center">🎤PAGINA SUPER MEGA PRO 71 + 78🎤</h1><br><br>

    <?php
    if(empty($_SESSION['username'])) 
    {
        echo
        "<h3 align='center'> Iniciar sesión </h3>

        <div align='center'>
            <form action='login.php' method='post'>
                <input type='text' name='username' placeholder='Username'>
                <input type='password' name='password' placeholder='Password'>
                <button type='submit' name='login'>Login</button>
            </form>
        </div>";
    }

    else 
    {
        $username = $_SESSION['username'];
        echo 
        "<p align='center'> Sesión actual: $username </p>
        <div align='center'>
            <form action='logout.php' method='post'>
                <button type='submit' name='logout'>Cerrar sesión</button>
            </form>
        </div>";

    } 
    ?>

    <br><br><br><br>
    <form action="usuarios/usuarios_db.php" method="post">
        <?php 
        $query = "SELECT * FROM usuarios;";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $dataCollected = $result -> fetchAll();
        ?>

        <input type='submit' class='btn btn-info btn-xs' value='Importar Usuarios'>
    </form>

</body>
</html>