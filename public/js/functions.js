var workshopsForTimes1;
var workshopsForTimes2;

Array.prototype.contains = function(obj) {
	var i = this.length;
	while (i--) {
		if (this[i] == obj) {
			return true;
		}
	}
	return false;
};

clear = function(selectbox) {
	if(selectbox != null) {
		var i;
		for(i=selectbox.options.length-1;i>=0;i--){
			selectbox.remove(i);
		}
	}
};

addOption = function(selectbox, opt) {
	var elOptNew = document.createElement('option');
	elOptNew.text = opt.Nombre;
	elOptNew.value = opt.Id;
	
	if(selectbox.name == 'campus1' && opt.Nombre == 'Sinaloa') {
		elOptNew.selected = 'selected';
	}
	
	try {
		selectbox.add(elOptNew, null); // standards compliant; doesn't work in IE
	} catch(ex) {
		selectbox.add(elOptNew); // IE only
	}
};

removeWorkshopsNotIn = function(workshops, iniHour, finalHour) {
	iniHour = iniHour == '' ? '00:00' : iniHour;
	finalHour = finalHour == '' ? '23:59' : finalHour;
	
	for(var i = 0; i < workshops.length; i++) {
		if(workshops[i].Horas != null) {
			var dur = workshops[i].Duracion*-1;

			for(var j = 0; j < workshops[i].Horas.length; j++) {
				if(!isBetween(iniHour, addTime(finalHour,dur), workshops[i].Horas[j].Hora)) {
					workshops[i].Horas.splice(j,1);
					j--;
				}
			}
		}
		
		if(workshops[i].Id > 0 && (workshops[i].Horas == null || workshops[i].Horas.length == 0)) {
			workshops.splice(i,1);
			i--;
		}
	}
	
	return workshops;
};

removeWorkshopsBySelected = function(workshops, selectedWorkshopId, iniHour) {
	var duration = 0;
	for(var i = 0; i < workshopsForTimes1.length; i++) {
		if(workshopsForTimes1[i].Id == selectedWorkshopId) {
			duration = workshopsForTimes1[i].Duracion;
			break;
		}
	}

	var finalHour = addTime(iniHour, duration);

	for(var i = 0; i < workshops.length; i++) {
		if(workshops[i].Horas != null) {
			for(var j = 0; j < workshops[i].Horas.length; j++) {
				if(isBetween(iniHour, finalHour, workshops[i].Horas[j].Hora) 
				|| isBetween(workshops[i].Horas[j].Hora, addTime(workshops[i].Horas[j].Hora, duration), iniHour)) {
					workshops[i].Horas.splice(j,1);
					j--;
				}
			}
			
			if(workshops[i].Id > 0 && (workshops[i].Horas == null || workshops[i].Horas.length == 0)) {
				workshops.splice(i,1);
				i--;
			}
		}
	}
	
	return workshops;
};

addTime = function(hour, time) {
	var h = parseInt(hour.split(':')[0],10) + parseInt(time);
	var m = (parseInt(hour.split(':')[1],10)+((time - parseInt(time))*60));
	if(m > 60) {
		var add = parseInt(m/60);
		h += add;
		m -= (add*60);
	}
	return h+':'+m;
};

isBetween = function(iniHour, finalHour, hourToCompare) {
	iniHour = iniHour == '' ? '00:00' : iniHour;
	finalHour = finalHour == '' ? '23:59' : finalHour;
	
	hc = hourToCompare.split(':');
	ih = iniHour.split(':');
	fh = finalHour.split(':');

	if((parseInt(hc[0],10) > parseInt(ih[0],10) || (parseInt(hc[0],10) == parseInt(ih[0],10) && parseInt(hc[1],10) >= parseInt(ih[1],10)))
		&& (parseInt(hc[0],10) < parseInt(fh[0],10) || (parseInt(hc[0],10) == parseInt(fh[0],10) && parseInt(hc[1],10) < parseInt(fh[1],10)))) {
		return true;
	}
	return false;
};