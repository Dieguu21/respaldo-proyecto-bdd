<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $productora = $_POST["nombre_productora"];

  echo "<br><h1 align='center'>Artistas con los que ha trabajado</h1>";
  echo "<h1 align='center'>$productora</h1><br>";

  #Se construye la consulta como un string
  $query = "SELECT DISTINCT Artistas.nombre, Artistas.tel FROM Artistas, Productoras, ProducidoPor, Presentaciones WHERE Artistas.id = Presentaciones.id_artista AND Productoras.nombre = '$productora' AND Productoras.id = ProducidoPor.id_productora AND ProducidoPor.id_evento = Presentaciones.id_evento;";

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
        echo "<tr><th>Nombre</th><th>Contacto</th></tr>";
        foreach ($evento as $e) {
          echo "<tr><td>$e[0]</td><td>$e[1]</td></tr>";
    }}
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>