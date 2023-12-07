<?php
  try {
    #Pide las variables para conectarse a la base de datos.
    require('data.php'); 
    # Se crea la instancia de PDO
    $db78 = new PDO("pgsql:dbname=$databaseName78;host=localhost;port=5432;user=$user78;password=$password78");
    $db71 = new PDO("pgsql:dbname=$databaseName71;host=localhost;port=5432;user=$user71;password=$password71");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>
