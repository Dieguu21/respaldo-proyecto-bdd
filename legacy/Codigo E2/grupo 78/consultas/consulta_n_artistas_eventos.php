<?php include('../templates/header.html');   ?>

<body>

<br>
<h1 align="center">Cantidad de Artistas presentados por Evento</h1>
<br>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se construye la consulta como un string
  $query = "SELECT Evento.nombre, COUNT(*) FROM Evento, Presentaciones WHERE Evento.id = Presentaciones.id_evento GROUP BY Evento.nombre;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$evento = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Evento</th>
      <th>Número de Artistas</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($evento as $e) {
          echo "<tr><td>$e[0]</td><td>$e[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>