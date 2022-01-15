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
  <a href="inegi_datos.php"><i class="Datos"></i> Datos</a>
  <a class="active" href="#"><i class="Consulta"></i> Consulta</a>
</div>
  </head>
  <body>

  <br>
            <?php 
                //configurar conexión a base de datos
                $host = "localhost"; //127.0.0.1
                $user = "root";
                $pass = ""; 
                $db = "INEGI";

                //creamos la conexión a la BD
                //conexion = false
                $conexion = mysqli_connect($host,$user,$pass,$db);
                if(!$conexion){
                    echo "Ha ocurrido un error al conectarse: " . mysqli_connect_errno();
                }
                $sql = "SELECT * FROM Familia WHERE municipio='Orizaba'";
                $resultado = mysqli_query($conexion,$sql);
                 //cerramos la conexión a la bd
                //mysqli_close($conexion);
                //var_dump($resultado);

                if($resultado->num_rows > 0){
                    while($fila = $resultado->fetch_assoc()){
                        echo "<div class='w3-third'>";
                            echo "<div class='w3-card'>";
                                echo "<div class='w3-container'>";
                                    echo $fila['folio_fam']. "<br>";
                                    echo $fila['domicilio'] . "<br>";
                                    echo $fila['localidad'] . "<br>";
                                    echo $fila['municipio'] . "<br>";
                                    ?>
                                    <a href='familias_actualizar.php?id=<?php echo $fila['folio_fam'] ?>'>Actualizar</a> | 
									<a href='familias_eliminar.php?id=<?php echo $fila['folio_fam']?>' onclick='return confirm("¿Desea eliminar la familia?");'>Eliminar</a>
									<?php
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }else{
                  
                }
                ?>
            </div>
        </div>



  </body>
</html>