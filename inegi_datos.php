<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="INEGI.png">
    <meta charset="utf-8">
    <title>INEGI</title>
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/estilo.css">
<div class="barra">
  <a href="inegi_inicio.php"><i class="Inicio" ></i> Inicio</a>
  <a href="inegi_registro.php"><i class="Registro" ></i> Registro</a>
  <a class="active" href="#"><i class="Datos"></i> Datos</a>
  <a href="inegi_consulta.php"><i class="Consulta"></i> Consulta</a>
</div>
  </head>
  <body>
    <br>
  <div class="container">
  <img src="familia.jpg" alt="familia">
  <button onclick="location.href='catalogo_familias.php'" class="btn">Datos Familias</button>
</div>

<div class="container">
  <img src="padres.jpg" alt="padres">
  <button onclick="location.href='catalogo_padres.php'" class="btn">Datos Padres</button>
</div>

<div class="container">
  <img src="hijos.jpg" alt="hijos">
  <button onclick="location.href='catalogo_hijos.php'" class="btn">Datos Hijos</button>
</div>
  </body>
</html>