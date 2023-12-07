<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $productora = $_POST["productora"];
  
  echo "<br><h1 align='center'>Último Evento realizado por</h1>";
  echo "<h1 align='center'>$productora</h1><br>";

  #Se construye la consulta como un string
  $query = "SELECT Evento.nombre, Evento.inicio, Evento.termino FROM Evento, Productoras, ProducidoPor WHERE Evento.id = ProducidoPor.id_evento AND Productoras.nombre = '$productora' AND Productoras.id = ProducidoPor.id_productora ORDER BY Evento.inicio DESC LIMIT 1;";
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$evento = $result -> fetchAll();
  ?>

  <table>
  
      <?php

        if (count($evento) == 0) {
          echo "<br><h3>No se encontraron resultados<h3/>";
        } else {
          echo "<tr><th>Nombre</th><th>Fecha de inicio del evento</th><th>Fecha de término del evento</th></tr>";
          foreach ($evento as $e) {
            echo "<tr><td>$e[0]</td><td>$e[1]</td><td>$e[2]</td></tr>";
                }
        }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>