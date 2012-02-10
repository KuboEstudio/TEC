<?php
header('X-Frame-Options: GOFORIT'); 
?>
<html>
<head>
    <link rel="shortcut icon" href="//www.google.com/images/icons/product/forms-16.png"
        type="image/x-icon">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>AZUL REFLEX</title>
    <link href="css/779923916-published_form_compiled.css"
        type="text/css" rel="stylesheet">
	<link href="css/google-form-with-validation.css"
        type="text/css" rel="stylesheet">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.metadata.js" type="text/javascript"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script src="../js/jquery.form.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		var options = { target: '#alert' };
		$('#ss-form').ajaxForm(options);
		
		$.metadata.setType("attr", "validate");
		$("#ss-form").validate();
		
		CleanForm = function() {
			$(':input').each(function(){
				var type = this.type, tag = this.tagName.toLowerCase();
				if (tag == 'form')
				  return $(':input',this).clearForm();
				if (type == 'text' || type == 'password' || tag == 'textarea')
				  this.value = '';
				else if (type == 'checkbox' || type == 'radio')
				  this.checked = false;
				else if (tag == 'select') {
				  if(this.name == "campus1") {
					for(var i = 0; i < this.options.length; i++) {
						if(this.options[i].text == 'Sinaloa') {
							this.selectedIndex = i;
							this.options[i].selected = 'selected';
							FillCampus(2);
							break;
						}
					}
				  } else if(this.name == 'course1' || this.name == 'prepa') {
					this.selectedIndex = 0;
					this.options[0].selected = 'selected';
					if(this.name == 'course1') {
						FillCourse(2);
					}
				  } else {
					clear(this);
				  }
				}
			});
		};
	});
	</script>
	
</head>
<body class="ss-base-body" dir="ltr">
    <div class="ss-form-container">
        <div class="ss-form-heading">
            <h1 class="ss-form-title" style="text-align:center;">
                Azul Reflex - Encuesta</h1>
            <hr class="ss-email-break">
        </div>
        <div class="ss-form">
            <form action="registroEncuesta.php" method="post" id="ss-form">
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_0">
                            &iquest;Recomendar&iacute;as este evento a otros compa&ntilde;eros? <span class="ss-required-asterisk">*</span></label>
                        <label class="ss-q-help" for="entry_0">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="recEvento" value="Definitivamente si" class="ss-q-radio"
                                        id="group_0_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Definitivamente si</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="recEvento" value="Probablemente si" class="ss-q-radio"
                                        id="group_0_2">
                                    Probablemente si</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="recEvento" value="Probablemente no" class="ss-q-radio"
                                        id="group_0_3">
                                    Probablemente no</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="recEvento" value="Definitivamente no" class="ss-q-radio"
                                        id="group_0_4">
                                    Definitivamente no</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_1">
                            La accesibilidad del registro en l&iacute;nea lo califico como: <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_1">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="acceRegistro" value="Excelente" class="ss-q-radio" id="group_1_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Excelente</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="acceRegistro" value="Muy bueno" class="ss-q-radio" id="group_1_2">
                                    Muy bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="acceRegistro" value="Bueno" class="ss-q-radio" id="group_1_3">
                                    Bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="acceRegistro" value="Malo" class="ss-q-radio" id="group_1_4">
                                    Malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="acceRegistro" value="Muy malo" class="ss-q-radio" id="group_1_5">
                                    Muy malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="acceRegistro" value="No utiliz&oacute;" class="ss-q-radio" id="group_1_6">
                                    No utiliz&oacute;</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_2">
                            La amabilidad del servicio en la recepci&oacute;n del evento fue: <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_2">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="amaServicio" value="Excelente" class="ss-q-radio" id="group_2_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Excelente</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="amaServicio" value="Muy bueno" class="ss-q-radio" id="group_2_2">
                                    Muy bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="amaServicio" value="Bueno" class="ss-q-radio" id="group_2_3">
                                    Bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="amaServicio" value="Malo" class="ss-q-radio" id="group_2_4">
                                    Malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="amaServicio" value="Muy malo" class="ss-q-radio" id="group_2_5">
                                    Muy malo</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_3">
                            &iquest;Te fue de utilidad la pl&aacute;tica de bienvenida? <span class="ss-required-asterisk">*</span></label>
                        <label class="ss-q-help" for="entry_3">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="utiPlatica" value="Si" class="ss-q-radio" id="group_3_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Si</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="utiPlatica" value="No" class="ss-q-radio" id="group_3_2">
                                    No</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_4">
                            &iquest;Te fue de utilidad el recorrido por las instalaciones? <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_4">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="utiRecorrido" value="Si" class="ss-q-radio" id="group_4_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Si</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="utiRecorrido" value="No" class="ss-q-radio" id="group_4_2">
                                    No</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-select">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_22">
                            Selecciona el 1er taller en el que participaste <span class="ss-required-asterisk">*</span></label>
                        <label class="ss-q-help" for="entry_22">
                        </label>
                        <select name="taller1" id="entry_22">
                            <option value="ARQ - Conoce la carrera de Arquitectura ">ARQ - Conoce la carrera de
                                Arquitectura </option>
                            <option value="IA/IIA/IBT - Cluster de Agronom&iacute;a, Industrias Alimentarias y Biotecnolog&iacute;a ">
                                IA/IIA/IBT - Cluster de Agronom&iacute;a, Industrias Alimentarias y Biotecnolog&iacute;a </option>
                            <option value="IAB/IBN - Conoce las carreras Ing. en Agrobiotecnolog&iacute;a y Bionegocios ">
                                IAB/IBN - Conoce las carreras Ing. en Agrobiotecnolog&iacute;a y Bionegocios </option>
                            <option value="IC - Taller Ingenier&iacute;a Civil  ">IC - Taller Ingenier&iacute;a Civil </option>
                            <option value="IFI - Conoce la carrera F&iacute;sico Industrial ">IFI - Conoce la carrera F&iacute;sico
                                Industrial </option>
                            <option value="IIS - Administraci&oacute;n de una Cadena Productiva ">IIS - Administraci&oacute;n
                                de una Cadena Productiva </option>
                            <option value="IIS - Programaci&oacute;n B&aacute;sica de un Robot Industrial ">IIS - Programaci&oacute;n
                                B&aacute;sica de un Robot Industrial </option>
                            <option value="IMA - Conoce la carrera de ingenier&iacute;a Mec&aacute;nico Administrador ">IMA -
                                Conoce la carrera de ingenier&iacute;a Mec&aacute;nico Administrador </option>
                            <option value="IMD - Desarrollando un Prototipo para la Salud ">IMD - Desarrollando
                                un Prototipo para la Salud </option>
                            <option value="IMI - Conoce la carrera de Producci&oacute;n Musical ">IMI - Conoce la carrera
                                de Producci&oacute;n Musical </option>
                            <option value="IMT - Conoce la carrera Ing. Mecatr&oacute;nica ">IMT - Conoce la carrera Ing.
                                Mecatr&oacute;nica </option>
                            <option value="INT - Mi negocio en la nube ">INT - Mi negocio en la nube </option>
                            <option value="INT ING - Carreras internacionales del &aacute;rea de Ingenier&iacute;a ">INT ING -
                                Carreras internacionales del &aacute;rea de Ingenier&iacute;a </option>
                            <option value="INT NEG - Carreras internacionales del &aacute;rea de Negocios ">INT NEG - Carreras
                                internacionales del &aacute;rea de Negocios </option>
                            <option value="IQA/IQP - Conoce las carreras Ing. en Qu&iacute;mico Administrador y en Procesos Sustentables ">
                                IQA/IQP - Conoce las carreras Ing. en Qu&iacute;mico Administrador y en Procesos Sustentables
                            </option>
                            <option value="ISC - Conoce el mundo de la ingenier&iacute;a en Sistemas Computacionales ">
                                ISC - Conoce el mundo de la ingenier&iacute;a en Sistemas Computacionales </option>
                            <option value="ISDR - Ingeniar&iacute;a en Sistemas Digitales y Rob&oacute;tica ">ISDR - Ingeniar&iacute;a
                                en Sistemas Digitales y Rob&oacute;tica </option>
                            <option value="ITC/ITM/ITIC - Conoce las carreras Ing. en Tecnolog&iacute;as de Informaci&oacute;n y Comunicaciones, Telecomunicaciones y Microelectr&oacute;nica y Tecnolog&iacute;as Computacionales. ">
                                ITC/ITM/ITIC - Conoce las carreras Ing. en Tecnolog&iacute;as de Informaci&oacute;n y Comunicaciones,
                                Telecomunicaciones y Microelectr&oacute;nica y Tecnolog&iacute;as Computacionales. </option>
                            <option value="ITE - Taller Ingenier&iacute;a en Tecnolog&iacute;as Electr&oacute;nicas ">ITE - Taller Ingenier&iacute;a
                                en Tecnolog&iacute;as Electr&oacute;nicas </option>
                            <option value="LAD - Stop Motion y la construcci&oacute;n de una historia ">LAD - Stop Motion
                                y la construcci&oacute;n de una historia </option>
                            <option value="LAE - Conoce la carrera de Administraci&oacute;n de Empresas ">LAE - Conoce
                                la carrera de Administraci&oacute;n de Empresas </option>
                            <option value="LAF - &iquest;Para qui&eacute;n trabajas? ">LAF - &iquest;Para qui&eacute;n trabajas? </option>
                            <option value="LCDE - &quot;My Business&quot; ">LCDE - "My Business" </option>
                            <option value="LCMD - &nbsp;Too much information! Periodismo digital y audiencias activas. ">
                                LCMD - &nbsp;Too much information! Periodismo digital y audiencias activas.
                            </option>
                            <option value="LCPF - &nbsp;Control Game: El reto ">LCPF - &nbsp;Control Game: El reto
                            </option>
                            <option value="LDI - Conoce la carrera de Dise&ntilde;o Industrial ">LDI - Conoce la carrera
                                de Dise&ntilde;o Industrial </option>
                            <option value="LEC - Conoce la carrera de Econom&iacute;a ">LEC - Conoce la carrera de Econom&iacute;a
                            </option>
                            <option value="LED - Descubre el mundo jur&iacute;dico a trav&eacute;s de los juicios orales ">LED
                                - Descubre el mundo jur&iacute;dico a trav&eacute;s de los juicios orales </option>
                            <option value="LEM - BRAND IDOL ">LEM - BRAND IDOL </option>
                            <option value="LIN - El Arte de la Negociaci&oacute;n ">LIN - El Arte de la Negociaci&oacute;n
                            </option>
                            <option value="LLE/LMI/LPL - Conoce las carreras Lic. en Letras Hisp&aacute;nicas, Period&iacute;smo y Medios de Informaci&oacute;n y Ciencia Pol&iacute;tica ">
                                LLE/LMI/LPL - Conoce las carreras Lic. en Letras Hisp&aacute;nicas, Period&iacute;smo y Medios
                                de Informaci&oacute;n y Ciencia Pol&iacute;tica </option>
                            <option value="LMC - &quot;Your Best Ad&quot; ">LMC - "Your Best Ad" </option>
                            <option value="LRI - Las guerras que vienen ">LRI - Las guerras que vienen </option>
                            <option value="MC - Hipertensi&oacute;n arterial la muerte silenciosa  ">MC - Hipertensi&oacute;n
                                arterial la muerte silenciosa </option>
                            <option value="MO - Conoce la carrera M&eacute;dico Odont&oacute;logo ">MO - Conoce la carrera M&eacute;dico
                                Odont&oacute;logo </option>
                        </select></div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
						<label class="ss-q-title">
							Selecciona la opci&oacute;n de acuerdo a tu grado de satisfacci&oacute;n con respecto a las siguientes caracter&iacute;sticas:
						</label>
						<br />
						<table>
							<tr align="center">
								<td></td>
								<td style="padding:0 15px;">Totalmente de acuerdo</td>
								<td style="padding:0 15px;">De acuerdo</td>
								<td style="padding:0 15px;">Indiferente</td>
								<td style="padding:0 15px;">Desacuerdo</td>
								<td style="padding:0 15px;">Totalmente desacuerdo</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr valign="top" align="center">
								<td align="left">
									<label class="ss-q-title" for="entry_23">
										Tiempo adecuado <span class="ss-required-asterisk">*</span></label>
									<label class="ss-q-help" for="entry_23" style="margin-left:-20px; padding-bottom:15px;">
										<input type="radio" name="taller1Tiempo" value="" class="ss-q-radio"
											id="group_23_0" validate="required:true" title="* Debes seleccionar una opci&oacute;n" style="visibility:hidden;">
									</label>
								</td>
								<td><input type="radio" name="taller1Tiempo" value="Totalmente de acuerdo" class="ss-q-radio"
											id="group_23_1"></td>
								<td><input type="radio" name="taller1Tiempo" value="De acuerdo" class="ss-q-radio" id="group_23_2"></td>
								<td><input type="radio" name="taller1Tiempo" value="Indiferente" class="ss-q-radio"
											id="group_23_3"></td>
								<td><input type="radio" name="taller1Tiempo" value="Desacuerdo" class="ss-q-radio" id="group_23_4"></td>
								<td><input type="radio" name="taller1Tiempo" value="Totalmente desacuerdo" class="ss-q-radio"
											id="group_23_5"></td>
							</tr>
							<tr valign="top" align="center">
								<td align="left">
									<label class="ss-q-title" for="entry_24">
										Din&aacute;mico <span class="ss-required-asterisk">*</span></label>
									<label class="ss-q-help" for="entry_24" style="margin-left:-20px; padding-bottom:15px;">
										<input type="radio" name="taller1Dinamico" value="" class="ss-q-radio"
											id="group_24_0" validate="required:true" title="* Debes seleccionar una opci&oacute;n" style="visibility:hidden;">
									</label>
								</td>
								<td><input type="radio" name="taller1Dinamico" value="Totalmente de acuerdo" class="ss-q-radio"
											id="group_24_1"></td>
								<td><input type="radio" name="taller1Dinamico" value="De acuerdo" class="ss-q-radio" id="group_24_2"></td>
								<td><input type="radio" name="taller1Dinamico" value="Indiferente" class="ss-q-radio"
											id="group_24_3"></td>
								<td><input type="radio" name="taller1Dinamico" value="Desacuerdo" class="ss-q-radio" id="group_24_4"></td>
								<td><input type="radio" name="taller1Dinamico" value="Totalmente desacuerdo" class="ss-q-radio"
											id="group_24_5"></td>
							</tr>
							<tr valign="top" align="center">
								<td align="left">
									<label class="ss-q-title" for="entry_26">
										Interesante <span class="ss-required-asterisk">*</span></label>
									<label class="ss-q-help" for="entry_26" style="margin-left:-20px; padding-bottom:15px;">
										<input type="radio" name="taller1Interesante" value="" class="ss-q-radio"
											id="group_26_0" validate="required:true" title="* Debes seleccionar una opci&oacute;n" style="visibility:hidden;">
									</label>
								</td>
								<td><input type="radio" name="taller1Interesante" value="Totalmente de acuerdo" class="ss-q-radio"
											id="group_26_1"></td>
								<td><input type="radio" name="taller1Interesante" value="De acuerdo" class="ss-q-radio" id="group_26_2"></td>
								<td><input type="radio" name="taller1Interesante" value="Indiferente" class="ss-q-radio"
											id="group_26_3"></td>
								<td><input type="radio" name="taller1Interesante" value="Desacuerdo" class="ss-q-radio" id="group_26_4"></td>
								<td><input type="radio" name="taller1Interesante" value="Totalmente desacuerdo" class="ss-q-radio"
											id="group_26_5"></td>
							</tr>
						</table>
                    </div>
                </div>
            </div>
            <br>
			<div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_30">
                            &iquest;El taller te ayuda en la toma de decisi&oacute;n de tu carrera? <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_30">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="taller1TomaDecision" value="Si" class="ss-q-radio" id="group_30_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Si</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="taller1TomaDecision" value="No" class="ss-q-radio" id="group_30_2">
                                    No</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item  ss-select">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_21">
                            Selecciona el 2do taller en el que participaste
                        </label>
                        <label class="ss-q-help" for="entry_21">
                        </label>
                        <select name="taller2" id="entry_21">
                            <option value=""></option>
                            <option value="ARQ - Conoce la carrera de Arquitectura ">ARQ - Conoce la carrera de
                                Arquitectura </option>
                            <option value="IA/IIA/IBT - Cluster de Agronom&iacute;a, Industrias Alimentarias y Biotecnolog&iacute;a ">
                                IA/IIA/IBT - Cluster de Agronom&iacute;a, Industrias Alimentarias y Biotecnolog&iacute;a </option>
                            <option value="IAB/IBN - Conoce las carreras Ing. en Agrobiotecnolog&iacute;a y Bionegocios ">
                                IAB/IBN - Conoce las carreras Ing. en Agrobiotecnolog&iacute;a y Bionegocios </option>
                            <option value="IC - Taller Ingenier&iacute;a Civil  ">IC - Taller Ingenier&iacute;a Civil </option>
                            <option value="IFI - Conoce la carrera F&iacute;sico Industrial ">IFI - Conoce la carrera F&iacute;sico
                                Industrial </option>
                            <option value="IIS - Administraci&oacute;n de una Cadena Productiva ">IIS - Administraci&oacute;n
                                de una Cadena Productiva </option>
                            <option value="IIS - Programaci&oacute;n B&aacute;sica de un Robot Industrial ">IIS - Programaci&oacute;n
                                B&aacute;sica de un Robot Industrial </option>
                            <option value="IMA - Conoce la carrera de ingenier&iacute;a Mec&aacute;nico Administrador ">IMA -
                                Conoce la carrera de ingenier&iacute;a Mec&aacute;nico Administrador </option>
                            <option value="IMD - Desarrollando un Prototipo para la Salud ">IMD - Desarrollando
                                un Prototipo para la Salud </option>
                            <option value="IMI - Conoce la carrera de Producci&oacute;n Musical ">IMI - Conoce la carrera
                                de Producci&oacute;n Musical </option>
                            <option value="IMT - Conoce la carrera Ing. Mecatr&oacute;nica ">IMT - Conoce la carrera Ing.
                                Mecatr&oacute;nica </option>
                            <option value="INT - Mi negocio en la nube ">INT - Mi negocio en la nube </option>
                            <option value="INT ING - Carreras internacionales del &aacute;rea de Ingenier&iacute;a ">INT ING -
                                Carreras internacionales del &aacute;rea de Ingenier&iacute;a </option>
                            <option value="INT NEG - Carreras internacionales del &aacute;rea de Negocios ">INT NEG - Carreras
                                internacionales del &aacute;rea de Negocios </option>
                            <option value="IQA/IQP - Conoce las carreras Ing. en Qu&iacute;mico Administrador y en Procesos Sustentables ">
                                IQA/IQP - Conoce las carreras Ing. en Qu&iacute;mico Administrador y en Procesos Sustentables
                            </option>
                            <option value="ISC - Conoce el mundo de la ingenier&iacute;a en Sistemas Computacionales ">
                                ISC - Conoce el mundo de la ingenier&iacute;a en Sistemas Computacionales </option>
                            <option value="ISDR - Ingeniar&iacute;a en Sistemas Digitales y Rob&oacute;tica ">ISDR - Ingeniar&iacute;a
                                en Sistemas Digitales y Rob&oacute;tica </option>
                            <option value="ITC/ITM/ITIC - Conoce las carreras Ing. en Tecnolog&iacute;as de Informaci&oacute;n y Comunicaciones, Telecomunicaciones y Microelectr&oacute;nica y Tecnolog&iacute;as Computacionales. ">
                                ITC/ITM/ITIC - Conoce las carreras Ing. en Tecnolog&iacute;as de Informaci&oacute;n y Comunicaciones,
                                Telecomunicaciones y Microelectr&oacute;nica y Tecnolog&iacute;as Computacionales. </option>
                            <option value="ITE - Taller Ingenier&iacute;a en Tecnolog&iacute;as Electr&oacute;nicas ">ITE - Taller Ingenier&iacute;a
                                en Tecnolog&iacute;as Electr&oacute;nicas </option>
                            <option value="LAD - Stop Motion y la construcci&oacute;n de una historia ">LAD - Stop Motion
                                y la construcci&oacute;n de una historia </option>
                            <option value="LAE - Conoce la carrera de Administraci&oacute;n de Empresas ">LAE - Conoce
                                la carrera de Administraci&oacute;n de Empresas </option>
                            <option value="LAF - &iquest;Para qui&eacute;n trabajas? ">LAF - &iquest;Para qui&eacute;n trabajas? </option>
                            <option value="LCDE - &quot;My Business&quot; ">LCDE - "My Business" </option>
                            <option value="LCMD - &nbsp;Too much information! Periodismo digital y audiencias activas. ">
                                LCMD - &nbsp;Too much information! Periodismo digital y audiencias activas.
                            </option>
                            <option value="LCPF - &nbsp;Control Game: El reto ">LCPF - &nbsp;Control Game: El reto
                            </option>
                            <option value="LDI - Conoce la carrera de Dise&ntilde;o Industrial ">LDI - Conoce la carrera
                                de Dise&ntilde;o Industrial </option>
                            <option value="LEC - Conoce la carrera de Econom&iacute;a ">LEC - Conoce la carrera de Econom&iacute;a
                            </option>
                            <option value="LED - Descubre el mundo jur&iacute;dico a trav&eacute;s de los juicios orales ">LED
                                - Descubre el mundo jur&iacute;dico a trav&eacute;s de los juicios orales </option>
                            <option value="LEM - BRAND IDOL ">LEM - BRAND IDOL </option>
                            <option value="LIN - El Arte de la Negociaci&oacute;n ">LIN - El Arte de la Negociaci&oacute;n
                            </option>
                            <option value="LLE/LMI/LPL - Conoce las carreras Lic. en Letras Hisp&aacute;nicas, Period&iacute;smo y Medios de Informaci&oacute;n y Ciencia Pol&iacute;tica ">
                                LLE/LMI/LPL - Conoce las carreras Lic. en Letras Hisp&aacute;nicas, Period&iacute;smo y Medios
                                de Informaci&oacute;n y Ciencia Pol&iacute;tica </option>
                            <option value="LMC - &quot;Your Best Ad&quot; ">LMC - "Your Best Ad" </option>
                            <option value="LRI - Las guerras que vienen ">LRI - Las guerras que vienen </option>
                            <option value="MC - Hipertensi&oacute;n arterial la muerte silenciosa  ">MC - Hipertensi&oacute;n
                                arterial la muerte silenciosa </option>
                            <option value="MO - Conoce la carrera M&eacute;dico Odont&oacute;logo ">MO - Conoce la carrera M&eacute;dico
                                Odont&oacute;logo </option>
                        </select></div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item  ss-radio">
                    <div class="ss-form-entry">
						<label class="ss-q-title">
							Selecciona la opci&oacute;n de acuerdo a tu grado de satisfacci&oacute;n con respecto a las siguientes caracter&iacute;sticas:
						</label>
						<br />
						<table>
							<tr align="center">
								<td></td>
								<td style="padding:0 15px;">Totalmente de acuerdo</td>
								<td style="padding:0 15px;">De acuerdo</td>
								<td style="padding:0 15px;">Indiferente</td>
								<td style="padding:0 15px;">Desacuerdo</td>
								<td style="padding:0 15px;">Totalmente desacuerdo</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr valign="top" align="center">
								<td align="left">
									<label class="ss-q-title" for="entry_28">
										Tiempo adecuado</label>
									<label class="ss-q-help" for="entry_28" style="margin-left:-20px; padding-bottom:15px;">
										<input type="radio" name="taller2Tiempo" value="" class="ss-q-radio"
											id="group_28_0" style="visibility:hidden;">
									</label>
								</td>
								<td><input type="radio" name="taller2Tiempo" value="Totalmente de acuerdo" class="ss-q-radio"
											id="group_28_1"></td>
								<td><input type="radio" name="taller2Tiempo" value="De acuerdo" class="ss-q-radio" id="group_28_2"></td>
								<td><input type="radio" name="taller2Tiempo" value="Indiferente" class="ss-q-radio"
											id="group_28_3"></td>
								<td><input type="radio" name="taller2Tiempo" value="Desacuerdo" class="ss-q-radio" id="group_28_4"></td>
								<td><input type="radio" name="taller2Tiempo" value="Totalmente desacuerdo" class="ss-q-radio"
											id="group_28_5"></td>
							</tr>
							<tr valign="top" align="center">
								<td align="left">
									<label class="ss-q-title" for="entry_30">
										Din&aacute;mico</label>
									<label class="ss-q-help" for="entry_30" style="margin-left:-20px; padding-bottom:15px;">
										<input type="radio" name="taller2Dinamico" value="" class="ss-q-radio"
											id="group_30_0" style="visibility:hidden;">
									</label>
								</td>
								<td><input type="radio" name="taller2Dinamico" value="Totalmente de acuerdo" class="ss-q-radio"
											id="group_30_1"></td>
								<td><input type="radio" name="taller2Dinamico" value="De acuerdo" class="ss-q-radio" id="group_30_2"></td>
								<td><input type="radio" name="taller2Dinamico" value="Indiferente" class="ss-q-radio"
											id="group_30_3"></td>
								<td><input type="radio" name="taller2Dinamico" value="Desacuerdo" class="ss-q-radio" id="group_30_4"></td>
								<td><input type="radio" name="taller2Dinamico" value="Totalmente desacuerdo" class="ss-q-radio"
											id="group_30_5"></td>
							</tr>
							<tr valign="top" align="center">
								<td align="left">
									<label class="ss-q-title" for="entry_32">
										Interesante</label>
									<label class="ss-q-help" for="entry_32" style="margin-left:-20px; padding-bottom:15px;">
										<input type="radio" name="taller2Interesante" value="" class="ss-q-radio"
											id="group_32_0" style="visibility:hidden;">
									</label>
								</td>
								<td><input type="radio" name="taller2Interesante" value="Totalmente de acuerdo" class="ss-q-radio"
											id="group_32_1"></td>
								<td><input type="radio" name="taller2Interesante" value="De acuerdo" class="ss-q-radio" id="group_32_2"></td>
								<td><input type="radio" name="taller2Interesante" value="Indiferente" class="ss-q-radio"
											id="group_32_3"></td>
								<td><input type="radio" name="taller2Interesante" value="Desacuerdo" class="ss-q-radio" id="group_32_4"></td>
								<td><input type="radio" name="taller2Interesante" value="Totalmente desacuerdo" class="ss-q-radio"
											id="group_32_5"></td>
							</tr>
						</table>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_11">
                            &iquest;El taller te ayuda en la toma de decisi&oacute;n de tu carrera?</label>
                        <label class="ss-q-help" for="entry_11">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="taller2TomaDecision" value="Si" class="ss-q-radio" id="group_11_1">
                                    Si</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="taller2TomaDecision" value="No" class="ss-q-radio" id="group_11_2">
                                    No</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_12">
                            Al visitar el pabell&oacute;n de carreras, &iquest;c&oacute;mo lo calificar&iacute;as? <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_12">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visPabellon" value="Excelente" class="ss-q-radio" id="group_12_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Excelente</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visPabellon" value="Muy bueno" class="ss-q-radio" id="group_12_2">
                                    Muy bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visPabellon" value="Bueno" class="ss-q-radio" id="group_12_3">
                                    Bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visPabellon" value="Malo" class="ss-q-radio" id="group_12_4">
                                    Malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visPabellon" value="Muy malo" class="ss-q-radio" id="group_12_5">
                                    Muy malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visPabellon" value="No utiliz&oacute;" class="ss-q-radio" id="group_12_6">
                                    No utiliz&oacute;</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_14">
                            Al visita el pabell&oacute;n de Admisiones, &iquest;c&oacute;mo lo calificar&iacute;as? <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_14">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visAdmisiones" value="Excelente" class="ss-q-radio" id="group_14_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Excelente</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visAdmisiones" value="Muy bueno" class="ss-q-radio" id="group_14_2">
                                    Muy bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visAdmisiones" value="Bueno" class="ss-q-radio" id="group_14_3">
                                    Bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visAdmisiones" value="Malo" class="ss-q-radio" id="group_14_4">
                                    Malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visAdmisiones" value="Muy malo" class="ss-q-radio" id="group_14_5">
                                    Muy malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="visAdmisiones" value="No utiliz&oacute;" class="ss-q-radio" id="group_14_6">
                                    No utiliz&oacute;</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_16">
                            &iquest;El servicio en el &aacute;rea de comida, fue? <span class="ss-required-asterisk">*</span></label>
                        <label class="ss-q-help" for="entry_16">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="servComida" value="Excelente" class="ss-q-radio" id="group_16_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Excelente</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="servComida" value="Muy bueno" class="ss-q-radio" id="group_16_2">
                                    Muy bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="servComida" value="Bueno" class="ss-q-radio" id="group_16_3">
                                    Bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="servComida" value="Malo" class="ss-q-radio" id="group_16_4">
                                    Malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="servComida" value="Muy malo" class="ss-q-radio" id="group_16_5">
                                    Muy malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="servComida" value="No utiliz&oacute;" class="ss-q-radio" id="group_16_6">
                                    No utiliz&oacute;</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item ss-item-required ss-radio">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_18">
                            En general el evento Azul Reflex lo calificar&iacute;as como: <span class="ss-required-asterisk">
                                *</span></label>
                        <label class="ss-q-help" for="entry_18">
                        </label>
                        <ul class="ss-choices">
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="generalEve" value="Excelente" class="ss-q-radio" id="group_18_1" validate="required:true" title="* Debes seleccionar una opci&oacute;n">
                                    Excelente</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="generalEve" value="Muy bueno" class="ss-q-radio" id="group_18_2">
                                    Muy bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="generalEve" value="Bueno" class="ss-q-radio" id="group_18_3">
                                    Bueno</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="generalEve" value="Malo" class="ss-q-radio" id="group_18_4">
                                    Malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="generalEve" value="Muy malo" class="ss-q-radio" id="group_18_5">
                                    Muy malo</label></li>
                            <li class="ss-choice-item">
                                <label class="ss-choice-label">
                                    <input type="radio" name="generalEve" value="No utiliz&oacute;" class="ss-q-radio" id="group_18_6">
                                    No utiliz&oacute;</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="errorbox-good">
                <div class="ss-item  ss-paragraph-text">
                    <div class="ss-form-entry">
                        <label class="ss-q-title" for="entry_20">
                            Comentarios:
                        </label>
                        <label class="ss-q-help" for="entry_20">
                        </label>
                        <textarea name="comentarios" rows="8" cols="75" class="ss-q-long" id="entry_20"></textarea></div>
                </div>
            </div>
            <br>
            <input type="hidden" name="pageNumber" value="0">
            <input type="hidden" name="backupCache" value="">
            <div class="ss-item ss-navigate">
                <div class="ss-form-entry">
					<div class="message"><div id="alert"></div></div>
                    <input type="submit" name="submit" value="Enviar"></div>
            </div>
            </form>
            <script type="text/javascript">

                (function () {
                    var divs = document.getElementById('ss-form').
getElementsByTagName('div');
                    var numDivs = divs.length;
                    for (var j = 0; j < numDivs; j++) {
                        if (divs[j].className == 'errorbox-bad') {
                            divs[j].lastChild.firstChild.lastChild.focus();
                            return;
                        }
                    }
                    for (var i = 0; i < numDivs; i++) {
                        var div = divs[i];
                        if (div.className == 'ss-form-entry' &&
div.firstChild &&
div.firstChild.className == 'ss-q-title') {
                            div.lastChild.focus();
                            return;
                        }
                    }
                })();
            </script>
        </div>
        <div class="ss-footer">
            
        </div>
    </div>
</body>
</html>