<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/estilo.css">
  <head>
  <link rel="icon" href="INEGI.png">
    <meta charset="utf-8">
    <title>INEGI</title>
    <!-- Load an icon library -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8"/>
<div class="barra">
  <a href="inegi_inicio.php"><i class="Inicio" ></i> Inicio</a>
  <a class="active" href="#"><i class="Registro"></i> Registro</a>
  <a href="inegi_datos.php"><i class="Datos"></i> Datos</a>
  <a href="inegi_consulta.php"><i class="Consulta"></i> Consulta</a>
</div>
  </head>
  <body>
<br>
<div class="container">
  <img src="familia.jpg" alt="familia">
  <button onclick="location.href='inegi_registrofamilia.php'" class="btn">Registro Familia</button>
</div>

<div class="container">
  <img src="padres.jpg" alt="padres">
  <button onclick="location.href='inegi_registropadres.php'" class="btn">Registro Padres</button>
</div>

<div class="container">
  <img src="hijos.jpg" alt="hijos">
  <button onclick="location.href='inegi_registrohijos.php'" class="btn">Registro Hijos</button>
</div>
  </body>
</html>