<!DOCTYPE html>
<html>
<head>
  <title>XD</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
<h1 align="center">🎤PAGINA SUPER PRO 123🎤</h1>
  <p style="text-align:center;">Aquí podrás encontrar información sobre artistas y sus eventos.</p>

  <br>
  <br>
  <br>

  <!-- Consulta 1 -->
  <h3 align="center">1. ¿Quieres buscar el nombre y teléfono de contacto de todos los artistas?</h3>
  
  <form align="center" action="consulta1.php" method="post">
    <input type="submit" value="Buscar">
  </form>

  <br>
  <br>
  <br>

  <!-- Consulta 2 -->
  <h3 align="center">2. ¿Quieres ver las entradas de cortesía que ha entregado un artista?</h3>

  <form align="center" action="consulta2.php" method="post">
    Artista:
    <input type="text" name="nombre_escenico">
    <br/>
    <input type="submit" value="Buscar">
  </form>

  <br> 
  <br>
  <br>

  <!-- Consulta 3 -->
  <h3 align="center">3. ¿Quieres buscar el último tour de un artista?</h3>

  <form align="center" action="consulta3.php" method="post">
    Artista:
    <input type="text" name="nombre_escenico">
    <br/>
    <input type="submit" value="Buscar">
</form>

  <br> 
  <br>
  <br>

  <!-- Consulta 4 -->
  <h3 align="center">4. ¿Quieres ver todos los países que serán visitados en un tour?</h3>

  <?php
  require("../Sites/conexion.php");
  $query = "SELECT nombre from tours ORDER BY nombre;";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consulta4.php" method="post">
    Seleccionar un tour:
    <select name="nombre_tour">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br>
    <input type="submit" value="Buscar">
  </form>
  
  <br> 
  <br>
  <br>

  <!-- Consulta 5 -->
  <h3 align="center">5. ¿Quieres buscar con que productoras ha trabajado un artista?</h3>

  <form align="center" action="consulta5.php" method="post">
    Artista:
    <input type="text" name="nombre_escenico">
    <br/>
    <input type="submit" value="Buscar">
  </form>

    <br> 
    <br>
    <br>

  <!-- Consulta 6 -->
  <h3 align="center">6. ¿Quieres buscar los hoteles en que se ha hospedado un artista?</h3>
  
  <form align="center" action="consulta6.php" method="post">
    Artista:
    <input type="text" name="nombre_escenico">
    <br/>
    <input type="submit" value="Buscar">
  </form>

  <br>
  <br>
  <br>


  <!-- Consulta 7 -->
  <h3 align="center">7. ¿Quieres ver al artista que ha entregado la mayor cantidad de entradas de cortesía?</h3>
  
  <form align="center" action="consulta7.php" method="post">
    <input type="submit" value="Buscar">
  </form>

  <br>
  <br>
  <br>


</body>

</html>
