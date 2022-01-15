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
  <a class="active" href="inegi_datos.php"><i class="Datos"></i> Datos</a>
  <a href="inegi_consulta.php"><i class="Consulta"></i> Consulta</a>
</div>
<body>


<?php 
            //preparar los datos de acceso a la BD
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "INEGI";
            //creamos la conexión a la base de datos
            $conexion = mysqli_connect($host,$user,$pass,$db);
            if(!$conexion){
                echo "Ha ocurrido un error al conectarse: " . mysqli_connect_errno();
            }

            //Una excepción permite controlar errores causados por el usuario
            //un bloque de excepciones, al menos debe tener una sección try (intentar) 
            //y una sección catch (capturarlo)
            try{
                $id = $_REQUEST['folio_fam'];
                $domicilio = $_REQUEST['domicilio'];
                $localidad = $_REQUEST['localidad'];
                $municipio = $_REQUEST['municipio'];

                $sql="UPDATE Familia SET domicilio='{$domicilio}',localidad='{$localidad}',municipio='{$municipio}'";
                //ejecutamos la actualización de los datos
                if(mysqli_query($conexion,$sql)){
                    echo "<h2>Se ha actualizado los datos del cliente</h2>";
                    //echo "<a href='clientes_registro.php'>Nuevo cliente</a>";
                    //echo "<a href='clientes_catalogo.php'>Catalogo</a>";
                }else{  
                    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
                }

            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>




</body>
</html>