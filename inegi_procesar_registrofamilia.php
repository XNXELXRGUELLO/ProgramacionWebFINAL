<?php 

        $domicilio = $_REQUEST['domicilio'];
        $localidad = $_REQUEST['localidad'];
        $municipio = $_REQUEST['municipio'];


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

        $sql = "INSERT INTO Familia (domicilio, localidad, municipio)";
        $sql = $sql . " VALUES ('{$domicilio}','{$localidad}','{$municipio}')";

        //para ejecutar la consulta o comando SQL, utilizamos
        //el método mysqli_query()
        
        if(mysqli_query($conexion,$sql)){
        }else{
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
            $conexion='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
        header("Location: http://localhost/ISC703B/final/inegi_registro.php"); 
    

?>