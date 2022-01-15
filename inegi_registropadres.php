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
  <a class="active" href="inegi_registro.php"><i class="Registro"></i> Registro</a>
  <a href="inegi_datos.php"><i class="Datos"></i> Datos</a>
  <a href="inegi_consulta.php"><i class="Consulta"></i> Consulta</a>
</div>
  </head>
  <body>
  <form action="inegi_procesar_registropadres.php" enctype="multipart/form-data" method="POST" name="fotos-registro-frm">
<br>
<form action="/action_page.php">
  <label for="nombre">Nombre(s)</label>
  <input type="text" id="nombre" name="nombre" placeholder="Ingresa nombre(s)">
  <label for="apellidopa">Apellido paterno</label>
  <input type="text" id="apellidopa" name="apellidopa" placeholder="Ingresa apellido paterno">
  <label for="apellidoma">Apellido materno</label>
  <input type="text" id="apellidoma" name="apellidoma" placeholder="Ingresa apellido materno">
  <label for="edad">Edad</label>
  <input type="number" id="edad" name="edad" placeholder="Ingresa edad">
  <label for="sexo">Sexo</label>
  <select id="sexo" name="sexo">
  <option value="femenino">Femenino</option>
  <option value="masculino">Masculino</option>
  </select>
  <label for="curp">CURP</label>
  <input type="text" id="curp" name="curp" placeholder="Ingresa CURP">
  <label for="claveelector">Clave de elector</label>
<input type="text" id="claveelector" name="claveelector" placeholder="Ingresa clave de elector">
<label for="rfc">RFC</label>
<input type="text" id="rfc" name="rfc" placeholder="Ingresa RFC">
<input type="file" name="foto" accept="image/*"/><br>
<label for="folio_fam">Folio Unico Familia</label>
<input type="number" id="folio_fam" name="folio_fam" placeholder="Ingresa el folio">
<input type="submit" value="Guardar">
</form>
  </body>
</html>