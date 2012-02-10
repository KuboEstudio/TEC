<?php
	require_once('db.class.php');
	$db = new db_class;

	if (!$db->connect('50.63.226.154', 'azulreflex', 'P@ssw0rd', 'azulreflex', true)) 
	   $db->print_last_error(false);

	$sql = "SELECT email, IFNULL(CONCAT(th1.hora,' - ',t1.nombre),'') AS taller1, IFNULL(CONCAT(th2.hora,' - ',t2.nombre),'') AS taller2
			FROM `registro` AS r
			LEFT JOIN `talleres_horas` AS th1
			 ON th1.id = r.taller_hora1
			LEFT JOIN `talleres` AS t1
			 ON t1.id = th1.tallerId
			LEFT JOIN `talleres_horas` AS th2
			 ON th2.id = r.taller_hora2
			LEFT JOIN `talleres` AS t2
			 ON t2.id = th2.tallerId
			WHERE r.id < 399";
			 
	$r = $db->select($sql);
	while ($row=$db->get_row($r, 'MYSQL_ASSOC')) {
		$message = "Gracias por registrarte, tu selección de talleres es:\r\n\r\n";
		$message .= "1.- ".$row['taller1']."\r\n\r\n";
		$message .= "2.- ".$row['taller2']."\r\n\r\n";
		$message .= "¡Te esperamos!\r\n\r\n";
		$message .= "Tecnológico de Monterrey";

		$headers  = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/plain; charset=utf-8\r\n"; 
		$headers .= "To: <".$row['email'].">\r\n"; 
		$headers .= "From: Registro Azul Reflex <".$row['email'].">\r\n"; 

		$response = mail($row['email'], 'Registro Azul Reflex', $message, $header);
		if($response) {
			echo 'Email enviado a '.$row['email'].'<br />';
		} else {
			echo 'ERROR: Email NO enviado a '.$row['email'].'<br />';
		}
	}
?>