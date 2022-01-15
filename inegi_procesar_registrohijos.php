<?php 
        $tamanio = getimagesize($_FILES['foto']['tmp_name']);
        if($tamanio !== false){
        $nombre = $_REQUEST['nombre'];
        $apellidopa = $_REQUEST['apellidopa'];
        $apellidoma = $_REQUEST['apellidoma'];
        $edad = $_REQUEST['edad'];
        $sexo = $_REQUEST['sexo'];
        $curp = $_REQUEST['curp'];
        $claveelector = $_REQUEST['claveelector'];
        $rfc = $_REQUEST['rfc'];
        $foto = $_FILES['foto']['tmp_name'];
        $folio_fam = $_REQUEST['folio_fam'];
        $img_content = addslashes(file_get_contents($foto));

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

        $sql = "INSERT INTO Hijos (nombre, apellidopa, apellidoma, edad, sexo, curp, claveelector, rfc, foto, folio_fam)";
        $sql = $sql . " VALUES ('{$nombre}','{$apellidopa}','{$apellidoma}',{$edad},'{$sexo}','{$curp}','{$claveelector}','{$rfc}','{$img_content}',{$folio_fam})";

        //para ejecutar la consulta o comando SQL, utilizamos
        //el método mysqli_query()
        
        if(mysqli_query($conexion,$sql)){
        }else{
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
            $conexion='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
        header("Location: http://localhost/ISC703B/final/inegi_registro.php"); 
    
    }
?>