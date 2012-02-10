<?php
	if($_REQUEST['recEvento'] != '' && $_REQUEST['acceRegistro'] != '' && $_REQUEST['amaServicio'] != '' && $_REQUEST['utiPlatica'] != '' && $_REQUEST['utiRecorrido'] != ''
	    && $_REQUEST['taller1'] != '' && $_REQUEST['taller1Tiempo'] != '' && $_REQUEST['taller1Dinamico'] != '' && $_REQUEST['taller1Interesante'] != ''
		&& $_REQUEST['taller1TomaDecision'] != '' && $_REQUEST['visPabellon'] != '' && $_REQUEST['visAdmisiones'] != '' && $_REQUEST['servComida'] != ''
		&& $_REQUEST['generalEve'] != '') {
			require_once('../db.class.php');
			$db = new db_class;
		
			if (!$db->connect('50.63.226.154', 'azulreflex', 'P@ssw0rd', 'azulreflex', true)) {
				$db->print_last_error(false);
			}
			
			$data = array(
				'recEvento' => $_REQUEST['recEvento']
				,'acceRegistro' => $_REQUEST['acceRegistro']
				,'amaServicio' => $_REQUEST['amaServicio']
				,'utiPlatica' => $_REQUEST['utiPlatica']
				,'utiRecorrido' => $_REQUEST['utiRecorrido']
				,'taller1' => $_REQUEST['taller1']
				,'taller1Tiempo' => $_REQUEST['taller1Tiempo']
				,'taller1Dinamico' => $_REQUEST['taller1Dinamico']
				,'taller1Interesante' => $_REQUEST['taller1Interesante']
				,'taller1TomaDecision' => $_REQUEST['taller1TomaDecision']
				,'taller2' => $_REQUEST['taller2']
				,'taller2Tiempo' => isset($_REQUEST['taller2Tiempo']) ? $_REQUEST['taller2Tiempo'] : ''
				,'taller2Dinamico' => isset($_REQUEST['taller2Dinamico']) ? $_REQUEST['taller2Dinamico'] : ''
				,'taller2Interesante' => isset($_REQUEST['taller2Interesante']) ? $_REQUEST['taller2Interesante'] : ''
				,'taller2TomaDecision' => isset($_REQUEST['taller2TomaDecision']) ? $_REQUEST['taller2TomaDecision'] : ''
				,'visPabellon' => $_REQUEST['visPabellon']
				,'visAdmisiones' => $_REQUEST['visAdmisiones']
				,'servComida' => $_REQUEST['servComida']
				,'generalEve' => $_REQUEST['generalEve']
				,'comentarios' => $_REQUEST['comentarios']
			);
			
			$registro_id = $db->insert_array('encuesta', $data);
			if (!$registro_id) {
				echo $db->print_last_error(false);
				
				$instruction = "<script>
					parent.$(\"#msgError\").html(\"Error al intentar guardar la información de la encuesta\");
					parent.$(\"#msgError\").fadeIn(\"slow\");
					</script>";
			} else {
				$instruction = "<script>
					parent.$(\"#ContentPage\").attr(\"src\",\"mensaje.html\");
					</script>";
			}

			echo $instruction;
	}
?>