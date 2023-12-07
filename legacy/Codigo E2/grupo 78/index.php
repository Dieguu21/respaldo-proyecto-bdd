<?php include('templates/header.html');   ?>

<body>
  <br>
  <h1 align="center">Live Music Now</h1>

  <!-- Fuente: https://codepen.io/yichi/pen/QYVNQq -->
  <link rel="stylesheet" href="styles/music_bar.css">
  <div class="now playing" id="music">
    <span class="bar n1">A</span>
    <span class="bar n2">B</span>
    <span class="bar n3">c</span>
    <span class="bar n4">D</span>
    <span class="bar n5">E</span>
    <span class="bar n6">F</span>
    <span class="bar n7">G</span>
    <span class="bar n8">H</span>
  </div>

  <h2 style="text-align:center;">Encuentra toda la información sobre tus productoras y eventos musicales favoritos</h2>

  <img src="images/concert.jpg", class="center">
  <br>
  <br>

  <br>
  <h2>Busca tu Productora favorita!</h2>
  <br>

  <h3> ¿Quieres buscar el contacto de Productoras de Eventos?</h3>

  <form action="consultas/consulta_contacto_productoras.php" method="post">
    <input align="right" type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3> ¿Quieres ver cuántos eventos ha realizado cada Productora?</h3>

  <form action="consultas/consulta_n_eventos_productoras.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>


  <h3> ¿Quieres ver el último evento realizado por una Productora?</h3>

  <?php
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre FROM Productoras ORDER BY nombre;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form action="consultas/consulta_ultimo_evento_productora.php" method="post">
    Ingrese el nombre de la Productora:
    <select name='productora'>
    <?php
      foreach ($dataCollected as $d) {
        echo "<option value='$d[0]'>$d[0]</option>";
      }
      ?>
    </select>
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3> ¿Quieres ver los artistas con los que ha trabajado alguna Productora?</h3>

   <?php
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT nombre FROM Productoras ORDER BY nombre;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form action="consultas/consulta_artistas_productora.php" method="post">
    Ingrese el nombre de la Productora:
    <select name="nombre_productora">
    <?php
      foreach ($dataCollected as $d) {
        echo "<option value='$d[0]'>$d[0]</option>";
      }
      ?>
    </select>
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>
  <img src="images/event.jpg", class="center">
  <br>
  <br>

  <h2>Busca tu Evento favorito!</h2>
  <br>

  <h3> ¿Quieres ver cuántos artistas se presentaron en cada Evento?</h3>

  <form action="consultas/consulta_n_artistas_eventos.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3> ¿Quieres ver el Evento con más entradas vendidas?</h3>

  <form align="center" action="consultas/consulta_mas_entradas_evento.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>
  

  <h3> ¿Quieres ver los ingresos en ventas de algún Evento?</h3>

  <form action="consultas/consulta_ingresos_evento.php" method="post">
    Ingrese el nombre del Evento:
    <input type="text" name="evento">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

</body>
</html>
