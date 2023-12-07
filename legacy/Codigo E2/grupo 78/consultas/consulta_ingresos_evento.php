<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $evento = $_POST["evento"];

  echo "<br><h1 align='center'>Ingresos en ventas de</h1>";
  echo "<h1 align='center'>$evento</h1><br>";

  #Se construye la consulta como un string
 	# Ingresos por evento
  $query = "SELECT Evento.nombre, SUM(Entradas.precio) FROM Evento, Entradas, EntradaDe WHERE Evento.id = EntradaDe.id_evento AND Entradas.id = EntradaDe.id_entrada AND Evento.nombre = '$evento' GROUP BY Evento.nombre;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$evento = $result -> fetchAll();
  ?>

  <table>
  
      <?php

      if (count($evento) == 0) {
        echo "<br><h3>No se encontraron resultados</h3>";
      } else {
        echo "<tr><th>Evento</th><th>Total de ventas por entradas</th></tr>";
        foreach ($evento as $e) {
          echo "<tr><td>$e[0]</td><td>$e[1]</td></tr>";
    }}
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>