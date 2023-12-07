<?php
    include('templates/header.html');
    $username = $_POST['username'];
    $password = $_POST['password'];

    require("config/conexion.php");
    $query = "SELECT * FROM usuarios WHERE nombre='$username' AND contrasena='$password'";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $dataCollected = $result -> fetchAll();

    # si el usuario existe, se crea una sesión y se redirige a la página de inicio
    if ($result -> rowCount() != 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $dataCollected[0][3];
        
        # si el usuario es de tipo artista, se redirige a la página de inicio de artistas
        if ($_SESSION['type'] == 'artista') {
            header("location: artistas/index.php");
            exit();
        }
        # si el usuario es de tipo productora, se redirige a la página de inicio de productoras
        elseif ($_SESSION['type'] == 'productora') {
            header("location: productoras/index.php");
            exit();
        }
    }
    # si el usuario no existe, se redirige a la página de login
    else {
        echo "<h1 align='center'>No se pudo iniciar sesión</h1><br>
        <h1 align='center'>Usuario o clave incorrecta.</h1>";
        echo "
        <form align='center' action='index.php' method='post'>
            <input type='submit' value='Volver'></input>
        </form>";}
?>


