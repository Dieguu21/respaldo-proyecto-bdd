<?php 
require("../config/conexion.php");
require("password_generator.php");
require("obtener_usuario.php");
?>

<?php
    
    session_start();
    $_SESSION['import'] = ["artistas" => 0, "productoras" => 0];


    // ARTISTAS
    $query =  "SELECT nombre_escenico FROM artistas;";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $all_artistas = $result -> fetchAll();
    foreach ($all_artistas as $a){
        // $user_name = strtolower($a[0]);
        // $user_name = str_replace(' ', '', $user_name);
        $user_name = obtenerNombreUsuarioArtista($a[0]);
        $password = randomPassword();

        # Revisar si el usuario ya existe
        $query = "SELECT * FROM usuarios WHERE nombre='$user_name';";
        $result = $db71 -> prepare($query);
        $result-> execute();
        $user = $result -> fetchAll();

        if (sizeof($user) == 0) {
            $query2 = "INSERT INTO usuarios (nombre, contrasena, tipo_usuario) VALUES ('$user_name', '$password', 'artista');";
            $result2 = $db71 -> prepare($query2);
            $result2 -> execute();
        }
        else {
            $_SESSION['import']['artistas'] += 1;
        }
    }


    // PRODUCTORAS
    $query3 = "SELECT DISTINCT nombre from Productoras;";
    $result3 = $db78 -> prepare($query3);
    $result3 -> execute();
    $all_productoras = $result3 -> fetchAll();
    foreach ($all_productoras as $p) { 
        $user_name = obtenerNombreUsuarioProductora($p[0]);
        $password = randomPassword();

        # Revisar si el usuario ya existe
        $query = "SELECT * FROM usuarios WHERE nombre='$user_name';";
        $result = $db71 -> prepare($query);
        $result -> execute();
        $user = $result -> fetchAll();

        if (sizeof($user) == 0) {
            $query4 = "INSERT INTO usuarios (nombre, contrasena, tipo_usuario) VALUES ('$user_name','$password','productora');";
            $result4 = $db71 -> prepare($query4);
            $result4 -> execute(); }
        else {
            $_SESSION['import']['productoras'] += 1;
        }
    }
    header("location: import_usuarios.php");
    exit();

?>
