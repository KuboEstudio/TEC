<?php
	require_once('../db.class.php');
	$db = new db_class;

	if (!$db->connect('50.63.226.154', 'azulreflex', 'P@ssw0rd', 'azulreflex', true)) 
	   $db->print_last_error(false);

	#Sql, acá pone tu consulta a la tabla que necesites exportar filtrando los datos que creas necesarios.
	$sql = "
	SELECT r.id, r.`nombre`, `apPaterno`, `apMaterno`, `email`, `tel`, `cel`, `dir`, `dob`, e.`nombre` as prepa, 
			IFNULL(c1.`nombre`,'') as carrera1, IFNULL(c2.`nombre`,'') as carrera2, IFNULL(c3.`nombre`,'') as carrera3, 
			IFNULL(ca1.`nombre`,'') as escuela1, IFNULL(ca2.`nombre`,'') as escuela2, IFNULL(ca3.`nombre`,'') as escuela3, 
			IFNULL(t1.`nombre`,'') as taller1, IFNULL(th1.`hora`,'') as tallerhora1, IFNULL(t2.`nombre`,'') as taller2,
			IFNULL(th2.`hora`,'') as tallerhora2, `promPrepa`, `nMama`, `nPapa` 
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
	 
	$registros = $db->select($sql);

	$i = 0;
	$max = mysql_num_rows($registros);
	
	$result = array("totalCount" => $max, "registros" => array());
	
	while ($row=$db->get_row($registros, 'MYSQL_ASSOC')) {
		$row['prepa'] = utf8_encode($row['prepa']);
		$row['carrera1'] = utf8_encode($row['carrera1']);
		$row['carrera2'] = utf8_encode($row['carrera2']);
		$row['carrera3'] = utf8_encode($row['carrera3']);
		$row['escuela1'] = utf8_encode($row['escuela1']);
		$row['escuela2'] = utf8_encode($row['escuela2']);
		$row['escuela3'] = utf8_encode($row['escuela3']);
		$row['taller1'] = utf8_encode($row['taller1']);
		$row['taller2'] = utf8_encode($row['taller2']);
				 
		$result["registros"][$i] = $row;
		$i++;
	}
	
	echo json_encode($result);
?>