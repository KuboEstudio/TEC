<?php
	require_once('../../db.class.php');
	$db = new db_class;

	if (!$db->connect('50.63.226.154', 'azulreflex', 'P@ssw0rd', 'azulreflex', true)) 
	   $db->print_last_error(false);

	#Sql, acá pone tu consulta a la tabla que necesites exportar filtrando los datos que creas necesarios.
	$sql = "SELECT * FROM `encuesta`";
	 
	$registros = $db->select($sql);

	$i = 0;
	$max = mysql_num_rows($registros);
	
	$result = array("totalCount" => $max, "registros" => array());
	
	while ($row=$db->get_row($registros, 'MYSQL_ASSOC')) {
		$row['acceRegistro'] = utf8_encode($row['acceRegistro']);
		$row['amaServicio'] = utf8_encode($row['amaServicio']);
		$row['taller1'] = utf8_encode($row['taller1']);
		$row['taller2'] = utf8_encode($row['taller2']);
		$row['visPabellon'] = utf8_encode($row['visPabellon']);
		$row['visAdmisiones'] = utf8_encode($row['visAdmisiones']);
		$row['servComida'] = utf8_encode($row['servComida']);
		$row['generalEve'] = utf8_encode($row['generalEve']);
		$row['comentarios'] = utf8_encode($row['comentarios']);
				 
		$result["registros"][$i] = $row;
		$i++;
	}
	
	echo json_encode($result);
?>