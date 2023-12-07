<?php include('../templates/header.html');   ?>

<body>

<br>
<h1 align="center">Cantidad de Eventos realizados por cada Productora</h1>
<br>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se construye la consulta como un string
  $query = "SELECT Productoras.nombre, COUNT(*) FROM Productoras, ProducidoPor WHERE Productoras.id = ProducidoPor.id_productora GROUP BY Productoras.nombre;"; 

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Nombre</th>
      <th>Número de Eventos</th>
    </tr>
  
      <?php
      
        foreach ($productoras as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>