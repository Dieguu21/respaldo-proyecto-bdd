<?php include('../templates/header.html');   ?>

<body>

<br>
<h1 align="center">Evento con más Entradas vendidas</h1>
<br>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se construye la consulta como un string
  # Evento con más entradas vendidas
  $query = "SELECT Evento.nombre, COUNT(*) FROM Evento, Entradas, EntradaDe WHERE Evento.id = EntradaDe.id_evento AND Entradas.id = EntradaDe.id_entrada GROUP BY Evento.nombre ORDER BY COUNT(*) DESC LIMIT 1;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$evento = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Nombre Evento</th>
      <th>Número de entradas vendidas</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($evento as $e) {
          echo "<tr><td>$e[0]</td><td>$e[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>