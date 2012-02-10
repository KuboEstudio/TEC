$(document).ready(function(){ 
	try {
		var inputVal = new LiveValidation('nombre');
		inputVal.add( Validate.Presence );

		inputVal = new LiveValidation('apPaterno');
		inputVal.add( Validate.Presence );

		inputVal = new LiveValidation('apMaterno');
		inputVal.add( Validate.Presence );

		inputVal = new LiveValidation('dir');
		inputVal.add( Validate.Presence );

		inputVal = new LiveValidation('dob');
		inputVal.add( Validate.Presence );
		inputVal.add( Validate.Length, { minimum: 10, maximum: 10, failureMessage: "El formato es dd/mm/aaaa" } );
		inputVal.add( Validate.Format, {pattern: /^[0-3]?[0-9]\/[01]?[0-9]\/[12][90][0-9][0-9]$/, failureMessage: "El formato es dd/mm/aaaa" } );

		inputVal = new LiveValidation('tel');
		inputVal.add( Validate.Length, { minimum: 13, maximum: 13 } );
		inputVal.add( Validate.Format, {pattern: /^\((\d{3})\)(\d{3})[- ](\d{4})$/, failureMessage: "El formato es (###)###-####" } );

		inputVal = new LiveValidation('cel');
		inputVal.add( Validate.Length, { minimum: 13, maximum: 13 } );
		inputVal.add( Validate.Format, {pattern: /^\((\d{3})\)(\d{3})[- ](\d{4})$/, failureMessage: "El formato es (###)###-####" } );

		inputVal = new LiveValidation('prepa');
		inputVal.add( Validate.Presence );
		inputVal.add( Validate.Numericality, { minimum: 1, tooLowMessage: "Debes seleccionar una escuela" });

		inputVal = new LiveValidation('prepa_otra');
		inputVal.add( Validate.Presence );

		inputVal = new LiveValidation('course1');
		inputVal.add( Validate.Presence );
		inputVal.add( Validate.Numericality, { minimum: 1, tooLowMessage: "Debes seleccionar una carrera" });

		inputVal = new LiveValidation('promPrepa');
		inputVal.add( Validate.Numericality, { maximum: 100 } );

		inputVal = new LiveValidation('email');
		inputVal.add( Validate.Presence );
	inputVal.add( Validate.Email );
	} catch(err) { }
});