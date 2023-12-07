<?php include('../templates/header.html');   ?>

<body>

<br>
<h1 align="center">Contacto de Productoras</h1>
<br>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se construye la consulta como un string
 	$query = "SELECT nombre, tel FROM Productoras;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Nombre</th>
      <th>Teléfono</th>
    </tr>
  
      <?php
        
        foreach ($productoras as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>