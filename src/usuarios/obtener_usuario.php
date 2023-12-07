<?php

// ARTISTAS
function obtenerNombreUsuarioArtista($nombre_escenico_artista) {

    $nombre_usuario = strtolower($nombre_escenico_artista);
    $nombre_usuario = str_replace(' ', '', $nombre_usuario);

    return $nombre_usuario;
}


function obtenerNombreEscenicoArtista($nombre_usuario) {
    require("../config/conexion.php");
    $query = "SELECT nombre_escenico FROM artistas";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();
    
    foreach ($artistas as $a) {
        $nombre_escenico = $a[0];
        if (obtenerNombreUsuarioArtista($nombre_escenico) == $nombre_usuario) {
            return $nombre_escenico;
        }
    }
}

function obtenerNombreEscenicoArtistaDoble($nombre_usuario) {
    require("../../config/conexion.php");
    $query = "SELECT nombre_escenico FROM artistas";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();
    
    foreach ($artistas as $a) {
        $nombre_escenico = $a[0];
        if (obtenerNombreUsuarioArtista($nombre_escenico) == $nombre_usuario) {
            return $nombre_escenico;
        }
    }
}

// PRODUCTORAS
function obtenerNombreUsuarioProductora($nombre_productora) {

    $user_name = strtolower($nombre_productora);
    $user_name = str_replace(' ', '_', $user_name);

    return $user_name;
}

function obtenerNombreOriginalProductora($usuario_productora) {

    require("../../config/conexion.php");
    $query = "SELECT nombre FROM Productoras";
    $result = $db78 -> prepare($query);
    $result -> execute();
    $productoras = $result -> fetchAll();
    
    foreach ($productoras as $p) {
        $nombre_original_productora = $p[0];
        if (obtenerNombreUsuarioProductora($nombre_original_productora) == $usuario_productora) {
            return $nombre_original_productora;
        }

    }
}


?>