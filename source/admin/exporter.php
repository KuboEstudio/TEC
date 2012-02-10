<?php
	$file_type = "vnd.ms-excel";
	$file_ending = "xls";
	
	HEADER("Content-Type: application/$file_type; charset=iso-8859-1");
	HEADER("Content-Disposition: attachment; filename=inscritos.$file_ending");
	HEADER("Pragma: no-cache");
	HEADER("Expires: 0");
	
	require_once('../db.class.php');
	$db = new db_class;

	if (!$db->connect('50.63.226.154', 'azulreflex', 'P@ssw0rd', 'azulreflex', true)) 
	   $db->print_last_error(false);

	#Sql, acá pone tu consulta a la tabla que necesites exportar filtrando los datos que creas necesarios.
	$sql = "
	SELECT r.`nombre` as Nombre,
			`apPaterno` as 'Apellido Paterno',
			`apMaterno` as 'Apellido Materno', 
			`email`, `tel` as Teléfono, 
			`cel` as Celular, 
			`dir` as Dirección, 
			`dob` as 'Fecha de Nacimiento', 
			e.`nombre` as Preparatoria, 
			IFNULL(c1.`nombre`,'') as 'Carrera 1', 
			IFNULL(c2.`nombre`,'') as 'Carrera 2', 
			IFNULL(c3.`nombre`,'') as 'Carrera 3', 
			IFNULL(ca1.`nombre`,'') as 'Campus 1', 
			IFNULL(ca2.`nombre`,'') as 'Campus 2', 
			IFNULL(ca3.`nombre`,'') as 'Campus 3', 
			IFNULL(t1.`nombre`,'') as 'Taller 1', 
			IFNULL(th1.`hora`,'') as 'Taller 1 Hora', 
			IFNULL(t2.`nombre`,'') as 'Taller 2',
			IFNULL(th2.`hora`,'') as 'Taller 2 Hora', 
			`promPrepa` as Promedio, 
			`nMama` as Mamá, 
			`nPapa` as Papá
	FROM `registro` r
	LEFT JOIN `carreras` c1
		ON c1.`id` = r.`carrera1`
	LEFT JOIN `carreras` c2
		ON c2.`id` = r.`carrera2`
	LEFT JOIN `carreras` c3
		ON c3.`id` = r.`carrera3`
	LEFT JOIN `escuelas` e
		ON e.`id` = r.`prepa`
	LEFT JOIN `campus` ca1
		ON ca1.`id` = r.`campus1`
	LEFT JOIN `campus` ca2
		ON ca2.`id` = r.`campus2`
	LEFT JOIN `campus` ca3
		ON ca3.`id` = r.`campus3`
	LEFT JOIN `talleres_horas` th1
		ON th1.`id` = r.`taller_hora1`
	LEFT JOIN `talleres` t1
		ON t1.`id` = th1.`tallerId`
	LEFT JOIN `talleres_horas` th2
		ON th2.`id` = r.`taller_hora2`
	LEFT JOIN `talleres` t2
		ON t2.`id` = th2.`tallerId`";
	 
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
				 if($column == 'Nombre'
					|| $column == 'Apellido Paterno'
					|| $column == 'Apellido Materno'
					|| $column == 'Dirección'
					|| $column == 'Mamá'
					|| $column == 'Papá') {
					$texto = utf8_decode($texto);
				 }
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