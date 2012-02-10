<?php
	$file_type = "vnd.ms-excel";
	$file_ending = "xls";
	
	HEADER("Content-Type: application/$file_type; charset=iso-8859-1");
	HEADER("Content-Disposition: attachment; filename=encuestas.$file_ending");
	HEADER("Pragma: no-cache");
	HEADER("Expires: 0");
	
	require_once('../../db.class.php');
	$db = new db_class;

	if (!$db->connect('50.63.226.154', 'azulreflex', 'P@ssw0rd', 'azulreflex', true)) 
	   $db->print_last_error(false);

	#Sql, acá pone tu consulta a la tabla que necesites exportar filtrando los datos que creas necesarios.
	$sql = "SELECT 
				recEvento AS '¿Recomendarías este evento a otros compañeros?'
				,acceRegistro AS 'La accesibilidad del registro en línea lo califico como:'
				,amaServicio AS 'La amabilidad del servicio en la recepción del evento fue:'
				,utiPlatica AS '¿Te fue de utilidad la plática de bienvenida?'
				,utiRecorrido AS '¿Te fue de utilidad el recorrido por las instalaciones?'
				,taller1 AS '1er taller en el que participaste'
				,taller1Tiempo AS '1er Taller - Tiempo adecuado'
				,taller1Dinamico AS '1er Taller - Dinámico'
				,taller1Interesante AS '1er Taller - Interesante'
				,taller1TomaDecision AS '1er Taller - ¿Ayuda en la toma de decisión de tu carrera?'
				,taller2 AS '2do taller en el que participaste'
				,taller2Tiempo AS '2do Taller - Tiempo adecuado'
				,taller2Dinamico AS '2do Taller - Dinámico'
				,taller2Interesante AS '2do Taller - Interesante'
				,taller2TomaDecision AS '2do Taller - ¿Ayuda en la toma de decisión de tu carrera?'
				,visPabellon AS 'Al visitar el pabellón de carreras, ¿cómo lo calificarías?'
				,visAdmisiones AS 'Al visitar el pabellón de Admisiones, ¿cómo lo calificarías?'
				,servComida AS '¿El servicio en el área de comida, fue?'
				,generalEve AS 'En general el evento Azul Reflex lo calificarías como:'
				,comentarios AS 'Comentarios'
			FROM `encuesta`";
	 
	$result = $db->select($sql);
	
	/*    FORMATTING FOR EXCEL DOCUMENTS ('.xls')   */
     //create title with timestamp:
     IF ($Use_Title == 1)
     {
         ECHO("$title\n");
     }
     //define separator (defines columns in excel & tabs in word)
     $sep = "\t"; //tabbed character
 
     //start of printing column names as names of MySQL fields
     FOR ($i = 0; $i < MYSQL_NUM_FIELDS($result); $i++)
     {
         ECHO MYSQL_FIELD_NAME($result,$i) . "\t";
     }
     PRINT("\n");
     //end of printing column names
 
     //start while loop to get data
     WHILE($row = MYSQL_FETCH_ROW($result))
     {
         //set_time_limit(60); // HaRa
         $schema_insert = "";
         FOR($j=0; $j<mysql_num_fields($result);$j++)
         {
             IF(!ISSET($row[$j]))
                 $schema_insert .= "NULL".$sep;
             ELSEIF ($row[$j] != "") {
				 $texto = $row[$j];
				 $column = MYSQL_FIELD_NAME($result,$j);
				 $texto = utf8_decode($texto);
                 $schema_insert .= $texto.$sep;
			 }
             ELSE
                 $schema_insert .= "".$sep;
         }
         $schema_insert = STR_REPLACE($sep."$", "", $schema_insert);
         //following fix suggested by Josue (thanks, Josue!)
         //this corrects output in excel when table fields contain \n or \r
         //these two characters are now replaced with a space
         $schema_insert = PREG_REPLACE("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
         $schema_insert .= "\t";
         PRINT(TRIM($schema_insert));
         PRINT "\n";
     }
?>