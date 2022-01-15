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
    $folio_fam = $_REQUEST['id'];
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
    //preparamos el comando o consulta a ejecutar
    $sql = "SELECT * FROM Familia WHERE folio_fam = {$folio_fam}";
    //ejecutamos el comando o consulta 
    $resultado = mysqli_query($conexion, $sql);
    //cerramos la conexión a la base de datos
    mysqli_close($conexion);
    if($resultado){
        //leer el arreglo $resultado, el cual tiene los datos de la consulta
        //creamos una variable llamada $fila
        //el método fetch_assoc permite recuperar fila por fila los registros
        //de la consulta
        while($fila = $resultado->fetch_assoc()){
            ?>
                <form action="familias_procesar_actualizacion.php"
                    method="POST" name="familias-actualizar-frm"
                    enctype="multipart/form-data">
            <br>
<form action="/action_page.php">
    
<br>
<label for="domicilio">Domicilio</label>
<input type="text" id="domicilio" name="domicilio" placeholder="Ingresa calle y numero de la vivienda" value="<?php echo $fila['domicilio'] ?>"><br>
<label for="localidad">Localidad</label>
<select id="localidad" name="localidad" value="<?php echo $fila['localidad'] ?>"><br>
<option value="10 de Abril UNE" >10 de Abril UNE</option>
<option value="Abelardo L Rodriguez" >Abelardo L Rodr&iacute;guez</option>
<option value="Adolfo Lopez Mateos" >Adolfo L&oacute;pez Mateos</option>
<option value="Agricola Librado Rivera" >Agr&iacute;cola Librado Rivera</option>
<option value="Agricola Moctezuma" >Agr&iacute;cola Moctezuma</option>
<option value="Arias" >Arias</option>
<option value="Aulicaba" >Aulicaba</option>
<option value="Barrio Nuevo" >Barrio Nuevo</option>
<option value="Benito Juarez" >Benito Ju&aacute;rez</option>
<option value="Carlos Marx" >Carlos Marx</option>
<option value="Celulosa" >Celulosa</option>
<option value="Cerritos" >Cerritos</option>
<option value="Cerritos Norte" >Cerritos Norte</option>
<option value="Cerritos Sur" >Cerritos Sur</option>
<option value="Chicolaxa0II" >Chicolaxa0II</option>
<option value="Cidosa" >Cidosa</option>
<option value="Cuauhtemoc" >Cuauht&eacute;moc</option>
<option value="Dante Delgado" >Dante Delgado</option>
<option value="Del Maestro" >Del Maestro</option>
<option value="Diez De Mayo" >Diez De Mayo</option>
<option value="El Espinal" >El Espinal</option>
<option value="El Espinal Bajo" >El Espinal Bajo</option>
<option value="El Mirador Kimberly Clark" >El Mirador Kimberly Clark</option>
<option value="El Naranjal" >El Naranjal</option>
<option value="El Trebol Ctm" >El Tr&eacute;bol Ctm</option>
<option value="El Yute II" >El Yute II</option>
<option value="Electricistas" >Electricistas</option>
<option value="Emiliano Zapata Norte" >Emiliano Zapata Norte</option>
<option value="Emiliano Zapata Sur" >Emiliano Zapata Sur</option>
<option value="Emilio Suberbie" >Emilio Suberbie</option>
<option value="Empleados Moctezuma" >Empleados Moctezuma</option>
<option value="Espinal" >Espinal</option>
<option value="Fidel Velazquez" >Fidel Vel&aacute;zquez</option>
<option value="Fovisste" >Fovissste</option>
<option value="Francisco Ferrer Guardia" >Francisco Ferrer Guardia</option>
<option value="Francisco Gabilondo Soler" >Francisco Gabilondo Soler</option>
<option value="Galano" >Galano</option>
<option value="Guadalupe Victoria" >Guadalupe Victoria</option>
<option value="Ignacio Zaragoza" >Ignacio Zaragoza</option>
<option value="Indeco" >Indeco</option>
<option value="Instituto De Pensiones Del Estado" >Instituto De Pensiones Del Estado</option>
<option value="Jardin" >Jard&iacute;n</option>
<option value="Jardin I" >Jard&iacute;n I</option>
<option value="La Joya" >La Joya</option>
<option value="Las Alamedas" >Las Alamedas</option>
<option value="Lic. Marco Antonio" >Lic. Marco Antonio Mu&ntilde;oz</option>
<option value="Lourdes" >Lourdes</option>
<option value="M Alianza" >M Alianza</option>
<option value="Mier y Pesado" >Mier y Pesado</option>
<option value="Miguel Aleman" >Miguel Alem&aacute;n</option>
<option value="Miguel Hidalg" >Miguel Hidalgo</option>
<option value="Obreros Moctezuma" >Obreros Moctezuma</option>
<option value="Obreros de la Moctezuma" >Obreros de la Moctezuma</option>
<option value="Ojo De Agua" >Ojo De Agua</option>
<option value="Orizaba Centro" >Orizaba Centro</option>
<option value="Palmira" >Palmira</option>
<option value="Pluviosilla" >Pluviosilla</option>
<option value="Pradera" >Pradera</option>
<option value="Puerta Chica" >Puerta Chica</option>
<option value="Rafael Alvarado" >Rafael Alvarado</option>
<option value="Rincon Chico" >Rinc&oacute;n Chico</option>
<option value="SOAICC Solidaridad" >SOAICC Solidaridad</option>
<option value="Salvador Gonzalo Garcia" >Salvador Gonzalo Garc&iacute;a</option>
<option value="San Antonio Jalapilla" >San Antonio Jalapilla</option>
<option value="San Carlos" >San Carlos</option>
<option value="San Juan Bautista" >San Juan Bautista</option>
<option value="San Miguel" >San Miguel</option>
<option value="San Rafael" >San Rafael</option>
<option value="Santa Ana 1" >Santa Ana 1</option>
<option value="Santa Cruz" >Santa Cruz</option>
<option value="Santa Gertrudis" >Santa Gertrudis</option>
<option value="Santa Maria Tlachichilco" >Santa Mar&iacute;a Tlachichilco</option>
<option value="Santa Miguel Tlachichilco" >Santa Miguel Tlachichilco</option>
<option value="Serdan" >Serd&aacute;n</option>
<option value="Solidaridad Campesina" >Solidaridad Campesina</option>
<option value="Terricola" >Terr&iacute;cola</option>
<option value="Union Obrera" >Uni&oacute;n Obrera</option>
<option value="Urbana Librado Rivera" >Urbana Librado Rivera</option>
<option value="Urquijo" >Urquijo</option>
<option value="Veintisiete De Mayo" >Veintisiete De Mayo</option>
</select>

<label for="municipio">Municipio</label>
<select id="municipio" name="municipio" value="<?php echo $fila['municipio'] ?>"><br>
<option value="Acajete" >Acajete</option>
<option value="Acatlan" >Acatl&aacute;n</option>
<option value="Acayucan" >Acayucan</option>
<option value="Actopan" >Actopan</option>
<option value="Acula" >Acula</option>
<option value="Acultzingo" >Acultzingo</option>
<option value="Agua Dulce" >Agua Dulce</option>
<option value="Allende" >Allende</option>
<option value="Alpatlahuac" >Alpatlahuac</option>
<option value="Alto Lucero" >Alto Lucero</option>
<option value="Altotonga" >Altotonga</option>
<option value="Alvarado" >Alvarado</option>
<option value="Amatitlan" >Amatitl&aacute;n</option>
<option value="Amatlan De Los Reyes" >Amatlan De Los Reyes</option>
<option value="Amatlan Tuxpan" >Amatlan Tuxpan</option>
<option value="Apazapan" >Apazapan</option>
<option value="Aquila" >Aquila</option>
<option value="Astacinga" >Astacinga</option>
<option value="Atlahuilco" >Atlahuilco</option>
<option value="Atoyac" >Atoyac</option>
<option value="Atzacan" >Atzacan</option>
<option value="Atzalan" >Atzalan</option>
<option value="Ayahualulco" >Ayahualulco</option>
<option value="Banderilla" >Banderilla</option>
<option value="Benito Juarez" >Benito Ju&aacute;rez</option>
<option value="Boca Del Rio" >Boca Del R&iacute;o</option>
<option value="Calcahualco" >Calcahualco</option>
<option value="Camaron De Tejeda" >Camar&oacute;n De Tejeda</option>
<option value="Camerino Z Mendoza" >Camerino Z Mendoza</option>
<option value="Carlos A. Carrillo" >Carlos A. Carrillo</option>
<option value="Carrillo Puerto" >Carrillo Puerto</option>
<option value="Castillo De Teayo" >Castillo De Teayo</option>
<option value="Catemaco" >Catemaco</option>
<option value="Cazones De Herrera" >Cazones De Herrera</option>
<option value="Cerro Azul" >Cerro Azul</option>
<option value="Chacaltianguis" >Chacaltianguis</option>
<option value="Chalma" >Chalma</option>
<option value="Chiconamel" >Chiconamel</option>
<option value="Chiconquiaco" >Chiconquiaco</option>
<option value="Chicontepec" >Chicontepec</option>
<option value="Chinameca" >Chinameca</option>
<option value="Chinampa De Gorostiza" >Chinampa De Gorostiza</option>
<option value="Chocaman" >Chocaman</option>
<option value="Chontla" >Chontla</option>
<option value="Chumatlan" >Chumatlan</option>
<option value="Citlaltepetl" >Citlaltepetl</option>
<option value="Coacoatzintla" >Coacoatzintla</option>
<option value="Coahuitlan" >Coahuitlan</option>
<option value="Coatepec" >Coatepec</option>
<option value="Coatzacoalcos" >Coatzacoalcos</option>
<option value="Coatzintla" >Coatzintla</option>
<option value="Coetzala" >Coetzala</option>
<option value="Colipa" >Colipa</option>
<option value="Comapa" >Comapa</option>
<option value="Cosamaloapan" >Cosamaloapan</option>
<option value="Cosautlan De Carvajal" >Cosautlan De Carvajal</option>
<option value="Coscomatepec" >Coscomatepec</option>
<option value="Cosoleacaque" >Cosoleacaque</option>
<option value="Cotaxtla" >Cotaxtla</option>
<option value="Coxquihui" >Coxquihui</option>
<option value="Coyutla" >Coyutla</option>
<option value="Cuichapa" >Cuichapa</option>
<option value="Cuitlahuac" >Cuitl&aacute;huac</option>
<option value="Cordoba" >C&oacute;rdoba</option>
<option value="El Higo" >El Higo</option>
<option value="Emiliano Zapata" >Emiliano Zapata</option>
<option value="Espinal" >Espinal</option>
<option value="Filomeno Mata" >Filomeno Mata</option>
<option value="Fortin" >Fort&iacute;n</option>
<option value="Gutierrez Zamora" >Guti&eacute;rrez Zamora</option>
<option value="Hidalgotitlan" >Hidalgotitlan</option>
<option value="Huatusco" >Huatusco</option>
<option value="Huayacocotla" >Huayacocotla</option>
<option value="Hueyapan De Ocampo" >Hueyapan De Ocampo</option>
<option value="Huiloapan De Cuauhtemoc" >Huiloapan De Cuauht&eacute;moc</option>
<option value="Ignacio De La Llave" >Ignacio De La Llave</option>
<option value="Ilamatlan" >Ilamatlan</option>
<option value="Isla" >Isla</option>
<option value="Ixcatepec" >Ixcatepec</option>
<option value="Ixhuacan De Los Reyes" >Ixhuacan De Los Reyes</option>
<option value="Ixhuatlan De Madero" >Ixhuatlan De Madero</option>
<option value="Ixhuatlan Del Cafe" >Ixhuatlan Del Caf&eacute;</option>
<option value="Ixhuatlan Del Sureste" >Ixhuatlan Del Sureste</option>
<option value="Ixhuatlancillo" >Ixhuatlancillo</option>
<option value="Ixmatlahuacan" >Ixmatlahuacan</option>
<option value="Ixtaczoquitlan" >Ixtaczoquitlan</option>
<option value="Jalacingo" >Jalacingo</option>
<option value="Jalcomulco" >Jalcomulco</option>
<option value="Jaltipan" >Jaltipan</option>
<option value="Jamapa">Jamapa</option>
<option value="Jesus Carranza" >Jes&uacute;s Carranza</option>
<option value="Jilotepec" >Jilotepec</option>
<option value="Jose Azueta" >Jos&eacute; Azueta</option>
<option value="Juan Rodriguez" >Juan Rodr&iacute;guez Clara</option>
<option value="Juchique De Ferrer" >Juchique De Ferrer</option>
<option value="La Antigua" >La Antigua</option>
<option value="La Perla" >La Perla</option>
<option value="Landero Y Coss" >Landero Y Coss</option>
<option value="Las Choapas" >Las Choapas</option>
<option value="Las Minas" >Las Minas</option>
<option value="Las Vigas De Ramirez" >Las Vigas De Ram&iacute;rez</option>
<option value="Lerdo De Tejada" >Lerdo De Tejada</option>
<option value="Los Reyes" >Los Reyes</option>
<option value="Magdalena" >Magdalena</option>
<option value="Maltrata" >Maltrata</option>
<option value="Manlio Fabio Altamirano" >Manlio Fabio Altamirano</option>
<option value="Mariano Escobedo" >Mariano Escobedo</option>
<option value="Martinez De La Torre" >Mart&iacute;nez De La Torre</option>
<option value="Mecatlan" >Mecatlan</option>
<option value="Mecayapan" >Mecayapan</option>
<option value="Medellin" >Medell&iacute;n</option>
<option value="Miahuatlan" >Miahuatlan</option>
<option value="Minatitlan" >Minatitlan</option>
<option value="Misantla" >Misantla</option>
<option value="Mixtla De Altamirano" >Mixtla De Altamirano</option>
<option value="Moloacan" >Moloac&aacute;n</option>
<option value="Nanchital" >Nanchital De L&aacute;zaro C&aacute;rdenas Del R&iacute;o</option>
<option value="Naolinco" >Naolinco</option>
<option value="Naranjal" >Naranjal</option>
<option value="Naranjos Amatlan" >Naranjos Amatl&aacute;n</option>
<option value="Nautla" >Nautla</option>
<option value="Nogales" >Nogales</option>
<option value="Oluta" >Oluta</option>
<option value="Omealca" >Omealca</option>
<option value="Orizaba" >Orizaba</option>
<option value="Otatitlan" >Otatitlan</option>
<option value="Oteapan" >Oteapan</option>
<option value="Ozuluama" >Ozuluama</option>
<option value="Pajapan" >Pajapan</option>
<option value="Panuco" >Panuco</option>
<option value="Papantla" >Papantla</option>
<option value="Paso De Oveja" >Paso De Ovejas</option>
<option value="Paso Del Macho" >Paso Del Macho</option>
<option value="Perote" >Perote</option>
<option value="Platon Sanchez" >Platon S&aacute;nchez</option>
<option value="Playa Vicente" >Playa Vicente</option>
<option value="Poza Rica De Hidalgo" >Poza Rica De Hidalgo</option>
<option value="Pueblo Viejo" >Pueblo Viejo</option>
<option value="Puente Nacional" >Puente Nacional</option>
<option value="Rafael Delgado" >Rafael Delgado</option>
<option value="Rafael Lucio" >Rafael Lucio</option>
<option value="Rio Blanco" >R&iacute;o Blanco</option>
<option value="Saltabarranca" >Saltabarranca</option>
<option value="San Andres Tenejapan" >San Andr&eacute;s Tenejapan</option>
<option value="San Andres Tuxtla" >San Andr&eacute;s Tuxtla</option>
<option value="San Juan Evangelista" >San Juan Evangelista</option>
<option value="San Rafael" >San Rafael</option>
<option value="Santiago Sochiapan" >Santiago Sochiapan</option>
<option value="Santiago Tuxtla" >Santiago Tuxtla</option>
<option value="Sayula De Aleman" >Sayula De Alem&aacute;n</option>
<option value="Sochiapa" >Sochiapa</option>
<option value="Soconusco" >Soconusco</option>
<option value="Soledad Atzompa" >Soledad Atzompa</option>
<option value="Soledad De Doblado" >Soledad De Doblado</option>
<option value="Soteapan" >Soteapan</option>
<option value="Tamalin" >Tamalin</option>
<option value="Tamiahua" >Tamiahua</option>
<option value="Tampico Alto" >Tampico Alto</option>
<option value="Tancoco" >Tancoco</option>
<option value="Tantima" >Tantima</option>
<option value="Tantoyuca" >Tantoyuca</option>
<option value="Tatahuicapan De Juarez" >Tatahuicapan De Ju&aacute;rez</option>
<option value="Tatatila" >Tatatila</option>
<option value="Tecolutla" >Tecolutla</option>
<option value="Tehuipango" >Tehuipango</option>
<option value="Tejeria" >Tejer&iacute;a</option>
<option value="Temapache" >Temapache</option>
<option value="Tempoal" >Tempoal</option>
<option value="Tenampa" >Tenampa</option>
<option value="Tenochtitlan" >Tenochtitlan</option>
<option value="Teocelo" >Teocelo</option>
<option value="Tepatlaxco" >Tepatlaxco</option>
<option value="Tepetlan" >Tepetlan</option>
<option value="Tepetzintla" >Tepetzintla</option>
<option value="Tequila" >Tequila</option>
<option value="Texcatepec" >Texcatepec</option>
<option value="Texhuacan" >Texhuacan</option>
<option value="Texistepec" >Texistepec</option>
<option value="Tezonapa" >Tezonapa</option>
<option value="Tierra Blanca" >Tierra Blanca</option>
<option value="Tihuatlan" >Tihuatlan</option>
<option value="Tlachichilco" >Tlachichilco</option>
<option value="Tlacojalpan" >Tlacojalpan</option>
<option value="Tlacolulan" >Tlacolulan</option>
<option value="Tlacotalpan" >Tlacotalpan</option>
<option value="Tlacotepec De Mejia" >Tlacotepec De Mejia</option>
<option value="Tlalixcoyan" >Tlalixcoyan</option>
<option value="Tlalnelhuayocan" >Tlalnelhuayocan</option>
<option value="Tlaltetela" >Tlaltetela</option>
<option value="Tlapacoyan" >Tlapacoyan</option>
<option value="Tlaquilpa" >Tlaquilpa</option>
<option value="Tlilapan" >Tlilapan</option>
<option value="Tomatlan" >Tomatlan</option>
<option value="Tonayan" >Tonayan</option>
<option value="Totutla" >Totutla</option>
<option value="Tres Valles" >Tres Valles</option>
<option value="Tuxpan" >Tuxpan</option>
<option value="Tuxtilla" >Tuxtilla</option>
<option value="Ursulo Galvan" >Ursulo Galv&aacute;n</option>
<option value="Uxpanapa" >Uxpanapa</option>
<option value="Vega De Alatorre" >Vega De Alatorre</option>
<option value="Veracruz" >Veracruz</option>
<option value="Villa Aldama" >Villa Aldama</option>
<option value="Xalapa" >Xalapa</option>
<option value="Xico" >Xico</option>
<option value="Xoxocotla" >Xoxocotla</option>
<option value="Yanga" >Yanga</option>
<option value="Yecuatla" >Yecuatla</option>
<option value="Zacualpan" >Zacualpan</option>
<option value="Zaragoza" >Zaragoza</option>
<option value="Zentla" >Zentla</option>
<option value="Zongolica" >Zongolica</option>
<option value="Zontecomatlan de Lopez y Fuentes" >Zontecomatl&aacute;n de L&oacute;pez y Fuentes</option>
<option value="Zozocolco De Hidalgo" >Zozocolco De Hidalgo</option>
<option value="Alamo Temapache" >&Aacute;lamo Temapache</option>
<option value="Angel R Cabada" >&Aacute;ngel R Cabada</option>
</select>
<input type="submit" value="Guardar">
</form>
        
            <?php
        }
    }else{
        echo "Error al ejecutar la consulta " .  mysqli_error($conexion);
    }
?>



</body>
</html>