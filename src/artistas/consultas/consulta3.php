<?php 

function obtenerTourDeEvento($nombre_evento) {
    require("../config/conexion.php");
    // Importante: Dado que no hay forma de relacionar Tours con Eventos (por ejemplo, no fue posible en la e2 hacer una tabla "EsParteDe"
    //             ya que en los datos que nos entregaron no había forma de relacionarlos mediante una única consulta) entonces la manera 
    //             que se nos ocurrió fue la sgte:
    
    $query = "SELECT nombre FROM tours;";
    $result = $db71 -> prepare($query);
    $result -> execute();
    $tours = $result -> fetchAll();

    $existe_tour_con_nombre_del_evento = false;
    foreach ($tours as $t) {
        $nombre_tour = $t[0];
        if ($nombre_tour == $nombre_evento) {
            $existe_tour_con_nombre_del_evento = true;
        }
    }

    if ($existe_tour_con_nombre_del_evento){
        return $nombre_evento;
    }
    else{
        return "No pertenece a un tour";
    } 
}

?>